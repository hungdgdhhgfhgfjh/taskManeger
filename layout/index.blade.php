<!-- <div class="main-content"> -->
@extends('layout.footer')
@extends('layout.header')
@section('header')
<h2 style="margin-top: 150px;" class="text-primary"> Bảng black</h2>
<table  class="table table-dark">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
@section('footer')
@endsection


    <!-- <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form method="post" action="{{ route('checkEmail')}}">
        @csrf
        <label for="email-input">Email:</label>
        <input id="email-input" type="email" placeholder="Nhập email cần kiểm tra" name="email">
        <input type="submit" value="Check">
    </form>
    @if(isset($isEmail))
        Kết quả: {{ $isEmail ? 'Đúng định dạng Email':'Sai định dạng Email' }}
    @endif
    <?php echo "<h1><span style='color:green;background-color:black;'>hehe kiểm tra làm gì bạn<span></h1>" ?>
</div> -->


