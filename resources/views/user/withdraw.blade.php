@extends('layouts.user')
@section('title','Widthdraw')
@section('content')
   
   <div class="container">
       <div class="col-lg-10 offset-lg-1">
            <div class="content-wrapper">

                <div class="card-style">
                <div class="card-header-style">
                <strong class="card-title">Your Withdraw wallet Balance <i class="fa fa-dollar"></i>0</strong>
                </div>
                <div class="card-body">
                <p>Transaction List</p>
                <table class="table">
                <tbody><tr>
                <th>Remark</th>
                <th>Receipt</th>
                <th>Payment</th>
                <th>Date</th>
                <th>#</th>
                </tr>
                </tbody></table>
                </div>
                </div>
                
                <div class="card-style">
                    <div class="card-header-style">
                        <strong>Withdraw balance</strong>
                    </div>
                    <div class="card-body-style">
                         <div class="card-body-style">
                  <form action="">
                    <div class="row form-group mt-1">
                        <div class="col-lg-3">
                          <label for="">Amount</label>
                        </div> 
                        <div class="col-lg-9">
                          <input type="number" class="form-control">
                        </div>
                    </div>
                     <div class="row form-group">
                        <div class="col-lg-3">
                          <label for="">Bank Name</label>
                        </div> 
                        <div class="col-lg-9">
                          <select class="form-control" required="">
                            <option selected="selected" value="">Bank Name</option><option value="bKash">bKash</option>
                            <option value="Rocket">Rocket</option>
                            <option value="Nagod">Nagod</option>
                            <option value="Bank">Bank</option>
                            <option value="Payza">Payza</option>
                            <option value="Paypal">Paypal</option>
                            <option value="Wmz">Wmz</option>
                          </select>
                        </div>
                    </div>
                     <div class="row form-group">
                        <div class="col-lg-3">
                          <label for="">Account No</label>
                        </div> 
                        <div class="col-lg-9">
                          <input type="text" class="form-control">
                        </div>
                    </div>
                     <div class="row form-group">
                        <div class="col-lg-3">
                          <label for="">Remark</label>
                        </div> 
                        <div class="col-lg-9">
                          <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                            <input class="form-control btn btn-success" type="submit" value="Send">
                    </div>
                  </form>
              </div>
                    </div>
              </div>
          </div>
       </div>
  </div>


@stop