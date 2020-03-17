@extends('layouts.test')

@section('title', 'test')

@section('content')

    <h1>テストページ</h1>
    <p>test</p>
    <p class="caution" >test2</p>
    
    <ul>
        <li>項目１</li>
        <li>項目２</li>
    </ul>
    
    <input type="text" name="myname">
    
<body>
    <header>
        <h1>見出し</h1>
        
    </header>
    
    <main>
      <h1>見出し</h1>
      <p>キャッチコピー</p>
      
      <h2>見出し２</h2>
      <p class="box">キャッチコピー</p>
    </main>
</body>    
    
@endsection    
    
