@extends('template.default')
@section('title','Workshop FORM')
@section('header','File Default')

@section('content')
<h1>Workshop #HTML - FORM</h1>

<form>
    <div class="row mt-3">
        <div class="col-md-2"><label>ชื่อ</label></div>
        <div class="col">
            <input id="fname" class="form-control">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุชื่อ</div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-2"><label>สกุล</label></div>
        <div class="col">
            <input id="lname" class="form-control">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุนามสกุล</div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-2"><label>วันเกิด</label></div>
        <div class="col">
            <input type="date" id="birth" class="form-control">
            <div class="invalid-feedback">โปรดระบุวันเกิด</div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-2"><label>อายุ</label></div>
        <div class="col">
            <input id="age" class="form-control">
            <div class="invalid-feedback">โปรดระบุอายุ</div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-2"><label>เพศ</label></div>
        <div class="col">
            <div class="form-check form-check-inline">
                <input type="radio" name="gender" class="form-check-input">
                <label class="form-check-label">ชาย</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="gender" class="form-check-input">
                <label class="form-check-label">หญิง</label>
            </div>
            <div class="invalid-feedback d-block" id="genderError" style="display:none;">
                โปรดเลือกเพศ
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-2"><label>แนวเพลง</label></div>
        <div class="col">
            <div class="form-check form-check-inline">
                <input type="radio" name="music" class="form-check-input">
                <label class="form-check-label">เพื่อชีวิต</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="music" class="form-check-input">
                <label class="form-check-label">ลูกทุ่ง</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="music" class="form-check-input">
                <label class="form-check-label">อื่นๆ</label>
            </div>
            <div class="invalid-feedback d-block" id="musicError" style="display:none;">
                โปรดเลือกแนวเพลง
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col">
            <div class="form-check">
                <input type="checkbox" id="agree" class="form-check-input">
                <label class="form-check-label">ยินยอมให้เก็บข้อมูล</label>
                <div class="invalid-feedback d-block" id="agreeError" style="display:none;">
                    กรุณายินยอมให้เก็บข้อมูล
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-2">
            <button type="button" class="btn btn-secondary btn-sm" onclick="resetForm()">Reset</button>
        </div>
        <div class="col">
            <button type="button" class="btn btn-success btn-sm" onclick="submitForm()">Submit</button>
        </div>
    </div>
</form>
@endsection

@push('scripts')
<script>
    let submitted = false

    function checkInput(id) {
        const el = document.getElementById(id)
        if (!el.value.trim()) {
            el.classList.add('is-invalid')
            return false
        }
        el.classList.remove('is-invalid')
        el.classList.add('is-valid')
        return true
    }

    function submitForm() {
        submitted = true

        checkInput('fname')
        checkInput('lname')
        checkInput('birth')
        checkInput('age')

        document.getElementById('genderError').style.display =
            document.querySelector('input[name="gender"]:checked') ? 'none' : 'block'

        document.getElementById('musicError').style.display =
            document.querySelector('input[name="music"]:checked') ? 'none' : 'block'

        document.getElementById('agreeError').style.display =
            document.getElementById('agree').checked ? 'none' : 'block'
    }

    function resetForm() {
        submitted = false
        document.querySelector('form').reset()

        document.querySelectorAll('.is-valid,.is-invalid').forEach(el=>{
            el.classList.remove('is-valid','is-invalid')
        })

        genderError.style.display = 'none'
        musicError.style.display = 'none'
        agreeError.style.display = 'none'
    }
</script>
@endpush
