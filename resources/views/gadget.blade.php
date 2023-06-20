@extends('layout.app')
@section('title','man')

@section('content')
<div class="container mb-3 mt-3">
    <h3 class="container text-center">Shop by Category</h3>
     <div class="row">

       <div class="col-md-4 p-2">
            <div class="card" style="width: 100%;">
                <img src="{{asset('image/gadget_1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                            <h5 class="card-title">Service Name</h5>
                            <p class="card-text"> আমাদের নিজস্ব তত্ত্বাবধানে ব্যাগ গুলো প্রোডাকশন করেছি । আমাদের এই ব্যাগের গুণগতমান অনেক ভালো হবে ইনশাআল্লাহ| এটি মাঝারি সাইজের ব্যাগ | মিডিয়াম সফট হবে এবং গুণগত মান অনেক ভালো |

                            ব্যাগটিতে সিকিউরিটি লক রয়েছে | </p>
                            
                    </div>
            </div>

        </div>

         <div class="col-md-4 p-2">
             <div class="card" style="width: 100%;">
                    <img src="{{asset('image/gadget_2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                            <h5 class="card-title">Service Name</h5>
                            <p class="card-text">  আমাদের নিজস্ব তত্ত্বাবধানে ব্যাগ গুলো প্রোডাকশন করেছি । আমাদের এই ব্যাগের গুণগতমান অনেক ভালো হবে ইনশাআল্লাহ| এটি মাঝারি সাইজের ব্যাগ | মিডিয়াম সফট হবে এবং গুণগত মান অনেক ভালো |

                            ব্যাগটিতে সিকিউরিটি লক রয়েছে |</p>
                            
                    </div>
            </div>

        </div>

        

     </div>
</div>


@endsection