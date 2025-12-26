@extends('template.default')

@section('title','HTML FORM RESULT')
@section('header','ผลลัพธ์จาก Workshop #HTML-FORM')

@section('content')
<h2>ข้อมูลที่ได้รับจากฟอร์ม</h2>

<ul class="list-group mt-3">
    <li class="list-group-item">ชื่อ : {{ $data['fname'] ?? '-' }}</li>
    <li class="list-group-item">สกุล : {{ $data['lname'] ?? '-' }}</li>
    <li class="list-group-item">วันเกิด : {{ $data['birth'] ?? '-' }}</li>
    <li class="list-group-item">อายุ : {{ $data['age'] ?? '-' }}</li>
    <li class="list-group-item">เพศ : {{ $data['gender'] ?? '-' }}</li>
    <li class="list-group-item">สีที่ชอบ : {{ $data['color'] ?? '-' }}</li>
    <li class="list-group-item">แนวเพลง : {{ $data['music'] ?? '-' }}</li>
    <li class="list-group-item">ที่อยู่ : {{ $data['address'] ?? '-' }}</li>
</ul>

<div class="mt-4">
    <a href="/" class="btn btn-secondary">
        กลับไปหน้าฟอร์ม
    </a>
</div>
@endsection
