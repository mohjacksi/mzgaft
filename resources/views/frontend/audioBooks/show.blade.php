@extends('layouts.frontend')
@section('content')
@section('page_title', $audioBook->title)

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/audio-books">الكتب الصوتية</a></li>
    @php
    $parent = $audioBook->category;
    $up_parent = $parent?->parentCategory;
    @endphp
    @if (isset($up_parent))
        <li class="breadcrumb-item"><a
                href="{{ route('frontend.audio-books.category', $up_parent->id) }}">{{ $up_parent->name }}</a>
        </li>
    @endif
    @if (isset($parent))
        <li class="breadcrumb-item"><a href="{{ route('frontend.audio-books.category', $parent->id) }}">{{ $parent->name }}</a>
        </li>
    @endif
@endsection


<section class="section-style lesson-section section-cols">

    <div class="container">

        <div class="row">


            <div class="col-lg-8 half">

                <div class="duplicated-box-wrapper box-container">

                    <div class="duplicated-box box-lg lessons-style duplicated-box-2">

                        <div class="box-header box-padding ">

                            <div class="header-title ">

                                {{ $audioBook->title }}

                            </div>

                        </div>
                        <div class="box-body box-padding">

                            <div class="body-content ">

                                <div class="lesson-perview-area">


                                    <div class="book-wrap">

                                        <div class="book-item">
                                            <div class="book-img">

                                                <img class="img-fluid" src="{{ $audioBook->image?->getUrl() }}">
                                            </div>
                                        </div>

                                    </div>
                                    <br>

                                    {!! $audioBook->content !!}


                                    <div class="perview-btns">

                                        <button class="perview-btn audio-btn   " type="button" id="playAudiobtn">

                                            <i class="fa-solid fa-play"></i>
                                            <span>استماع</span>

                                        </button>

                                        <a href="{{ $audioBook->audio->first()->getUrl() }}" target="_blank" style="margin-left: 1.5rem;">
                                            <button class="perview-btn download-btn noty-btn" type="button">

                                                <i class="fa-solid fa-download"></i>
                                                <span>تحميل</span>

                                            </button>
                                        </a>

                                        <a href="{{ $audioBook->file->first()?->getUrl() }}" target="_blank">
                                            <button class="perview-btn audio-btn   " type="button" s>
                                                <i class="fa-solid fa-download"></i>
                                                <span>PDF</span>
                                            </button>
                                        </a>

                                    </div>

                                    <div class="audio-area" id="audioArea">

                                        <div class="audio-wrap">

                                            <audio controls class="audio-item" id="audio-item">
                                                <source src="{{ $audioBook->audio->first()->getUrl() }}"
                                                    type="audio/ogg">
                                                <source src="{{ $audioBook->audio->first()->getUrl() }}"
                                                    type="audio/mpeg">
                                            </audio>
                                            <div class=" close-audio" id="closeAudio">

                                                <i class="fa-solid fa-xmark"></i>
                                                إغلاق

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>


                        <br>
                        <div class="box-body box-padding">

                            <div class="body-content">



                            </div>

                            <x-share-box />
                        </div>

                    </div>



                </div>


            </div>
            <div class="col-lg-4 half">

                <div class="side-box-container">

                    <div class="box-wrap">


                        <div class="duplicated-box-wrapper">

                            <div class="duplicated-box box-lg box-side side-statistics  duplicated-box-2 ">

                                <div class="box-header box-padding ">

                                    <div class="header-title ">

                                        احصائيات

                                    </div>


                                </div>
                                <div class="box-body box-padding">

                                    <div class="body-content ">

                                        <ul class="body-list statistics-list">

                                            <li class="list-item">

                                                <div class="statistics-item">

                                                    <span class="statistics-text">

                                                        اجمالي مرات الاستماع
                                                        :

                                                    </span>
                                                    <span class="statistics-val">{{ $audioBook->visits ?? '0'}}</span>

                                                </div>

                                            </li>


                                        </ul>

                                    </div>

                                </div>

                            </div>


                        </div>


                    </div>


                </div>

            </div>


        </div>

    </div>

</section>
@endsection


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>

<script>
    /*** noty general style ***/
    $(".download-btn").click(function() {


        var n = new Noty({
            type: 'success', //error//
            theme: 'bootstrap-v4',
            layout: 'topRight',
            timeout: '2000',
            progressBar: true,
            closeWith: ['click'],
            text: '<i class="fa-solid fa-circle-check ms-1"></i> تم تنزيل الحلقة بنجاح',
        }).show();

    });



    /*** show audio  ***/
    var flag = false;
    $("#playAudiobtn").on("click", function() {


        flag = !flag;
        if (flag) {
            $('#audio-item').get(0).play();

        } else {
            $('#audio-item').get(0).pause();
        }
        $('#audioArea').fadeToggle();


    });
    $("#closeAudio").on("click", function() {

        $('#audioArea').fadeOut();
        $('#audio-item').get(0).pause();

    });

    function stopAudio(audio) {
        audio.pause();
        audio.currentTime = 0;
    }
</script>




@endsection
