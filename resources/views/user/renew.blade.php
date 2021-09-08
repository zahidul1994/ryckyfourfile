@extends('layouts.user')
@section('title','Renew')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="card-style">
                <div class="card-header-style">
                     <strong class="card-title">Your Renew wallet Balance <i class="fa fa-dollar"></i>0</strong>
                </div>
                <div class="card-body">
                    <p>Transaction List</p>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Remark</th>
                                <th>Receipt</th>
                                <th>Payment</th>
                                <th>Date</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="card-footer-style">
                    <h3 class="card-title">Send Money Another Account</h3>
                    <form method="POST" action="" accept-charset="UTF-8">
                        <div class="row">
                            <div class="col-md-2">
                              <label for="user_id">User Id</label>
                              <input class="form-control" required="" type="number" >
                            </div>
                            <div class="col-md-4">
                                <label for="payment">Amount</label>
                                <input class="form-control" required="" type="number" >
                            </div>
                            <div class="col-md-4">
                                 <label for="remark">Remark</label>
                                <input class="form-control"  type="text">
                            </div>
                            <div class="col-md-2"> <br>
                                <input class="form-control btn btn-success" type="submit" value="Send">
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        <div>
    </div>
</div>

@stop