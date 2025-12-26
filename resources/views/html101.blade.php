@extends('template.default')

@section('title', 'Workshop FORM')
@section('header', 'File Default')

@section('content')
    <h1>Workshop #HTML - FORM</h1>


    @csrf
    <form method="POST" action="/">
        @csrf
        {{-- ชื่อ --}}
        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="fname">ชื่อ</label>
            </div>
            <div class="col">
                <input id="fname" name="fname" class="form-control">
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">โปรดระบุชื่อ</div>
            </div>
        </div>

        {{-- สกุล --}}
        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="lname">สกุล</label>
            </div>
            <div class="col">
                <input id="lname" name="lname" class="form-control">
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">โปรดระบุนามสกุล</div>
            </div>
        </div>

        {{-- วันเกิด --}}
        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="birth">วัน/เดือน/ปีเกิด</label>
            </div>
            <div class="col">
                <input type="date" id="birth" name="birth" class="form-control">
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">โปรดระบุวันเดือนปีเกิด</div>
            </div>
        </div>

        {{-- อายุ --}}
        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="age">อายุ</label>
            </div>
            <div class="col">
                <input id="age" name="age" class="form-control">
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">โปรดระบุอายุ</div>
            </div>
        </div>

        {{-- เพศ --}}
        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label>เพศ</label>
            </div>
            <div class="col">
                <div class="form-check form-check-inline">
                    <input type="radio" id="male" name="gender" value="ชาย" class="form-check-input">
                    <label class="form-check-label" for="male">ชาย</label>
                </div>

                <div class="form-check form-check-inline">
                    <input type="radio" id="female" name="gender" value="หญิง" class="form-check-input">
                    <label class="form-check-label" for="female">หญิง</label>
                </div>

                <div class="invalid-feedback" id="genderError">
                    โปรดเลือกเพศ
                </div>
            </div>
        </div>

        {{-- รูป --}}
        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="photo">รูป</label>
            </div>
            <div class="col">
                <input type="file" id="photo" name="photo" class="form-control">
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">โปรดอัปโหลดรูป</div>
            </div>
        </div>

        {{-- ที่อยู่ --}}
        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="address">ที่อยู่</label>
            </div>
            <div class="col">
                <textarea id="address" name="address" class="form-control" rows="3"></textarea>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">โปรดระบุที่อยู่</div>
            </div>
        </div>

        {{-- สีที่ชอบ --}}
        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="color">สีที่ชอบ</label>
            </div>
            <div class="col">
                <select id="color" name="color" class="form-control" style="width:130px;">
                    <option value="">-- เลือกสี --</option>
                    <option>สีแดง</option>
                    <option>สีน้ำเงิน</option>
                    <option>สีเขียว</option>
                    <option>สีเหลือง</option>
                </select>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">โปรดเลือกสีที่ชอบ</div>
            </div>
        </div>

        {{-- แนวเพลง --}}
        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label>แนวเพลงที่ชอบ</label>
            </div>
            <div class="col">
                <div class="form-check form-check-inline">
                    <input type="radio" id="m1" name="music" value="เพื่อชีวิต" class="form-check-input">
                    <label class="form-check-label" for="m1">เพื่อชีวิต</label>
                </div>

                <div class="form-check form-check-inline">
                    <input type="radio" id="m2" name="music" value="ลูกทุ่ง" class="form-check-input">
                    <label class="form-check-label" for="m2">ลูกทุ่ง</label>
                </div>

                <div class="form-check form-check-inline">
                    <input type="radio" id="m3" name="music" value="อื่นๆ" class="form-check-input">
                    <label class="form-check-label" for="m3">อื่นๆ</label>
                </div>

                <div class="invalid-feedback" id="musicError">
                    โปรดเลือกแนวเพลงที่ชอบ
                </div>
            </div>
        </div>

        {{-- ยินยอม --}}
        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <div class="form-check">
                    <input type="checkbox" id="agree" class="form-check-input">
                    <label class="form-check-label" for="agree">ยินยอมให้เก็บข้อมูล</label>
                    <div class="invalid-feedback" id="agreeError">
                        กรุณายินยอมให้เก็บข้อมูล
                    </div>
                </div>
            </div>
        </div>

        {{-- ปุ่ม --}}
        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="resetForm()">
                    Reset
                </button>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-sm btn-success">
                    Submit
                </button>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        function validateField(id) {
            const el = document.getElementById(id)

            if (el.value.trim() === "") {
                el.classList.add('is-invalid')
                el.classList.remove('is-valid')
                return false
            }

            el.classList.add('is-valid')
            el.classList.remove('is-invalid')
            return true
        }

        function validateFile(id) {
            const el = document.getElementById(id)

            if (el.files.length === 0) {
                el.classList.add('is-invalid')
                el.classList.remove('is-valid')
                return false
            }

            el.classList.add('is-valid')
            el.classList.remove('is-invalid')
            return true
        }

        function toggleError(id, condition) {
            document.getElementById(id).style.display = condition ? 'none' : 'block'
        }

        function cilckMe() {
            validateField('fname')
            validateField('lname')
            validateField('birth')
            validateField('age')
            validateField('address')
            validateField('color')

            validateFile('photo')

            toggleError('genderError', document.querySelector('input[name="gender"]:checked'))
            toggleError('musicError', document.querySelector('input[name="music"]:checked'))
            toggleError('agreeError', document.getElementById('agree').checked)
        }

        function resetForm() {
            const form = document.querySelector('form')
            form.reset()

            document.querySelectorAll('.is-valid, .is-invalid')
                .forEach(el => el.classList.remove('is-valid', 'is-invalid'))

            toggleError('genderError', true)
            toggleError('musicError', true)
            toggleError('agreeError', true)
        }

        // ตัวอย่าง callback (เหมือนเดิม)
        function myFunc(callback) {
            callback("in CallBack")
        }

        function callMe(param) {
            console.log(param)
        }

        myFunc(callMe)

        let myval1 = 1
        let myval2 = parseInt("1")
        console.log(myval1 + myval2 + "\n\n\n\nทดสอบ")
    </script>
@endpush
