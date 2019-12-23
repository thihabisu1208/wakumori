@extends('layouts.app')

@section('content')
    <div class="container" id="teacher">
        <div id="teacherNav">
            <h2>ダッシュボード</h2>
        </div>
        <div id="teacherContent">
            <div id="teacherLists">
                <h2>先生情報<h2>
                <hr />
                <div id="teacherDetails">
                    <i class="fas fa-user"></i>
                    <div>
                        <p>名前 : {{ $teacher->name }}</p>
                        <p>メール : {{ $teacher->email }}</p>
                        <p v-if="{{ $teacher->roles->first()->name }} == teacher">担当</p>
                    </div>
                </div>
            </div>
            <div id="studentLists">
                <h2>学生一覧<h2>
                <hr />
                <div id="studentDetails">
                    @foreach ($students as $student)
                        <div class="student">
                            <i class="fas fa-user"></i>
                            <div>
                                <p>{{ $student->name }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection