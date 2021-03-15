@extends('layouts.app')

@section('content')
{{-- <div class="max-w-6xl mx-auto sm:px-6 lg:px-8"> --}}
    <div style="margin-bottom: -1%;">
        <div class="column column-100 full-width">
            <div class="card">
                <img src="/images/business-suit.jpg" style="width:100%">
            </div>
        </div>
    </div>

    <div class="bg-lb pb-10 full-width">
        <div class="row">
            <div class="column column-100 text-center">
                <br>
                <h2 class="text-black text-2xl"><b>Start your career early</b></h2>
                <h5>Jump start your career early. Land an internship or entry-level job at a cutting edge
                    startup, Fortune 500, or anything in between.
                </h5>
            </div>
        </div>
    </div>
    <div class="row text-center display-table margin-0-auto">
        <img src="/images/arrow.svg" class="bounce" alt="Scroll to continue" style="margin-top: -2rem;">
    </div>
    <br><br>
    <div>
        <div class="text-center text-2xl text-black">
            <h1><b>Here’s how it works.</b></h1>
        </div>
    </div>
    <br><br>
    <div class="grid grid-flow-col grid-cols-2 gap-4 mb-4">
        <div>
            <div class="text-center" style="padding-top: 8%;">
                <h3 class="text-black"><b>Tell us about yourself.</b></h3>
                <h5>We know finding a job can be stressful, 
                    so we’ve made it simple. It only takes a 
                    few minutes. Create a free profile on JobCorse 
                    to show your best self and get discovered by 
                    top employers. The jobs will literally come to you.</h5>
            </div>
        </div>
        <div>
            <div>
                <img src="/images/girl-with-laptop.jpg" class="pl-2" style="width: 25rem">
            </div>
        </div>
    </div>
    <div class="grid grid-flow-col grid-cols-2 gap-4 mb-4 pb-4">
        <div>
            <div>
                <img src="/images/apply-now.jpg" class="pl-2 ml-2" style="width: 25rem">
            </div>
        </div>
        <div class="text-center" style="padding-top: 8%;">
            <h3 class="text-black"><b>Browse available jobs.</b></h3>
            <h5>We know choosing where to apply can be
                difficult. We make it easy.
                Simply click apply and be done!
            </h5>
        </div>
    </div>

    <div class="pb-2">
        <div class="column column-100 text-center">
            <h1><b>Stop scrolling, start interviewing.</b></h1>
        </div>
    </div>
    <div class="text-center pb-12">
        <a href="/register-question" class="text-center block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0">
            <button class="py-2 rounded-lg border-2 border-red-500 px-4 bg-white text-black font-semibold rounded-lg shadow-md hover:bg-red focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-75">
              Get Hired
            </button>
          </a>    </div>
{{-- </div> --}}
@endsection