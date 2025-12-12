@extends('template.default')

@section('title', 'Workshop FORM')
@section('content')
    <h1>Workshop #HTML - FORM</h1>

    <form method="POST" action="/submit" enctype="multipart/form-data">


        <div class="row">
            <div class="col-sm-3">
                <label for = "fname">ชื่อ</label>
            </div>
            <div class="col-sm-9">
                <input type="text" id = "fname" class = "form-control is invalid">
                <div class="valid-feedbake">
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดระบุ
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label for = "lname">สกุล</label>
            </div>
            <div class="col-sm-9">
                <input type="text" id = "lname" class = "form-control">
            </div>
            <div>
                <button onclick="clickMe()" type="button">submit</button>
            </div>
        </div>


        {{-- <div >
                <div>
                    <label>ชื่อ:</label><br>
                    <input type="text" name="name" />
                </div>

                <div>
                    <label>สกุล:</label><br>
                    <input type="text" name="surname" />
                </div>
            </div><br> --}}

        {{-- <button type="reset"
                    style="background-color:white; padding:6px 12px; border:1px solid #ccc; cursor:pointer;">reset</button>
                <button type="submit"
                    style="background-color:green; color:white; padding:6px 12px; border:none; cursor:pointer;">submit</button> --}}



    </form>

@endsection
@push('scripts')
    <script>
        // alert("Hello World! JS")

        let clickMe = function() {
            let fname = document.getElementById('fname')

            if (fname.value == "") {
                fname.classList.remove('is-valid')
                fname.classList.add('is-valid')
            } else {
                fname.classList.remove('is-valid')
                fname.classList.add('is-valid')
            }
        }


        // let myfunc = (callback) => {
        //     callback("in Callback")
        // }
        callMe = (param) => {
            console.log(param)
        }

        // myfunc(callMe)

        let myvar1 = 1
        let myvar2 = "1";
        myvar2 = parseInt(myvar2)
        console.log(myvar1 + myvar2 + "\n\nทดสอบ")

        // console.log('Hello World! JS')
        // console.error('Hello Error!')
        // console.warn('Hello Warn!')
    </script>
@endpush
