@extends('layout')

<section class="home-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-2">
                <div class="logo">
                    <img src="/images/LMCORREA_logo.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-10">
                <nav>
                    <ul class="d-flex list-unstyled justify-content-end">
                        <li><a href="{{url('/')}}">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</section>

<section class="secure-post-header py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <p class="mb-4">Total Market Value</p>
                <span>$789,467,59 </span>
                <span class="stats"> <i class="fa fa-caret-up"></i> 3.29% +23,684.02</span>
            </div>
            <div class="col-xl-6">
                <div class="d-flex justify-content-end">
                    <a href="#">All Accounts</a>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="secure-main">
    <div class="container">
        <ul class="nav nav-tabs d-flex justify-content-around mb-4 mt-3" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="summary-tab" data-bs-toggle="tab" data-bs-target="#summary" type="button" role="tab" aria-controls="summary" aria-selected="true">Summary</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="positions-tab" data-bs-toggle="tab" data-bs-target="#positions" type="button" role="tab" aria-controls="positions" aria-selected="false">Postions</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="balances-tab" data-bs-toggle="tab" data-bs-target="#balances" type="button" role="tab" aria-controls="balances" aria-selected="false">Balances</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="trading-tab" data-bs-toggle="tab" data-bs-target="#trading" type="button" role="tab" aria-controls="trading" aria-selected="false">Trading</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="activity-tab" data-bs-toggle="tab" data-bs-target="#activity" type="button" role="tab" aria-controls="activity" aria-selected="false">Activity</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="document-tab" data-bs-toggle="tab" data-bs-target="#document" type="button" role="tab" aria-controls="document" aria-selected="false">Documents</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="summary" role="tabpanel" aria-labelledby="summary-tab">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="asset-allocation">
                            <h5 class="mb-4">Assest Allocation</h5>
                            <div id="chart-content">
                                <div class="row align-items-center">
                                    <div class="col-xl-5">
                                        <img src="/images/piechart.png" alt="">
                                    </div>
                                    <div class="col-xl-7">
                                        <div class="row mb-3">
                                            <div class="col-xl-6">
                                                <span></span>
                                                <p class="mb-2">Equities</p>
                                                <p  class="small-legend">Large Cap</p>
                                                <p class="small-legend">Mid Cap</p>
                                                <p class="small-legend">Small Cap</p>
                                            </div>
                                            <div class="col-xl-6"> 
                                                <p  class="mb-2">$260,524</p>
                                                <p class="small-legend">$130,262</p>
                                                <p class="small-legend">$104,209</p>
                                                <p class="small-legend">$52,104</p>
                                            </div>
                                        </div>
                                        <div class="row  mb-3">
                                            <div class="col-xl-6">
                                                <span></span>
                                                <p  class="mb-2">Fixed Income</p>
                                               
                                            </div>
                                            <div class="col-xl-6"> 
                                                <p  class="mb-2">$189,472</p>
                                                
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-xl-6">
                                                <span></span>
                                                <p  class="mb-2">Mutual Funds</p>
                                            </div>
                                            <div class="col-xl-6"> 
                                                <p  class="mb-2">$276,313</p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-xl-6">
                                                <span></span>
                                                <p  class="mb-2">Cash & Equivalents</p>
                                                <p class="small-legend">Cash</p>
                                                <p class="small-legend">Money Market</p>
                                            </div>
                                            <div class="col-xl-6">
                                                <p  class="mb-2">$63,157</p>
                                                <p class="small-legend">$18,947</p>
                                                <p class="small-legend">$44,209</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="market-movers">
                            <h5 class="mb-4 text-center">Market Movers</h5>
                            <div class="row">
                                <div class="col-xl-4">
                                    <h6 class="mb-4">Symbol</h6>
                                    <p class="blue-text">TSLA</p>
                                    <p class="company-name">Tesla, Inc.</p>
                                    <p class="blue-text">BAC</p>
                                    <p class="company-name">Bank of America Corporation</p>
                                    <p class="blue-text">AMD</p>
                                    <p class="company-name">Advance Micro Devices, Inc.</p>
                                    <p class="blue-text">F</p>
                                    <p class="company-name">Ford Motor Company</p>
                                    <p class="blue-text">INTC</p>
                                    <p class="company-name">Intel Corporation</p>
                                    <p class="blue-text">GE</p>
                                    <p class="company-name">General Electric Company</p>
                                    <p class="blue-text">ASAN</p>
                                    <p class="company-name">Asana, Inc.</p>
                                </div>
                                <div class="col-xl-3 prices">
                                    <h6 class="mb-4">Last Price</h6>
                                    <p>172.92</p>
                                
                                    <p>30.54</p>
                                    
                                    <p>84.03</p>
                                    
                                    <p>12.45</p>
                                    
                                    <p>26.44</p>
                                    
                                    <p>91.56</p>
                                    
                                    <p>21.17</p>
                                    
                                </div>
                                <div class="col-xl-2 prices">
                                    <h6 class="mb-4">Change</h6>
                                    <p class="red-txt">-9.08</p>
                                
                                    <p class="red-txt">-2.02</p>
                                    
                                    <p class="red-txt">-1.34</p>
                                    
                                    <p class="red-txt">-0.53</p>
                                    
                                    <p class="green-txt">+0.46</p>
                                    
                                    <p class="green-txt">+4.58</p>
                                    
                                    <p class="green-txt">+3.37</p>
                                </div>
                                <div class="col-xl-3 prices">
                                    <h6 class="mb-4">% Change</h6>
                                    <p class="red-txt">-4.99%</p>
                                
                                    <p class="red-txt">-6.20%</p>
                                    
                                    <p class="red-txt">-1.57%</p>
                                    
                                    <p class="red-txt">-4.08%</p>
                                    
                                    <p class="green-txt">+1.77%</p>
                                    
                                    <p class="green-txt">+5.27%</p>
                                    
                                    <p class="green-txt">+18.93%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="advisor">
                            <h5 class="mb-4 text-center">Your Advisor</h5>
                            <p>Luis Correa</p>
                            <p>633 W. 5th Street</p>
                            <p>Los Angeles, CA 90071</p>
                            <p>(213) 555-1000</p>
                            <a href="mailto:Luis.Correa@LMCorrea.com">Luis.Correa@LMCorrea.com</a>
                        </div>
                        <div class="notification">
                            <h5 class="mb-4 text-center">Notification</h5>
                            <p class="text-center">No pending Notification</p>
                        </div>
                        <div class="best-performing">
                            <h5 class="mb-4 text-center">Best Performing Assets</h5>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="positions" role="tabpanel" aria-labelledby="positions-tab">
                <div class="positions-inner">
                    <ul class="nav nav-tabs d-flex justify-content-start" id="myTab" role="tablist">
                        <li class="nav-item " role="presentation">
                            <button class="nav-link active" id="position-inner-tab" data-bs-toggle="tab" data-bs-target="#position-inner" type="button" role="tab" aria-controls="position-inner" aria-selected="false">Positions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="closed-position-tab" data-bs-toggle="tab" data-bs-target="#closed-position" type="button" role="tab" aria-controls="closed-position" aria-selected="false">Closed Positions</button>
                        </li>                       
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="position-inner" role="tabpanel" aria-labelledby="position-inner-tab">
                            <table class="w-100 text-center border">
                                <thead>
                                    <tr>
                                        <td  class="fw-bold">Security</td>
                                        <td  class="fw-bold">Quantity</td>
                                        <td  class="fw-bold">Last Clost Price</td>
                                        <td  class="fw-bold">Cost Basis</td>
                                        <td  class="fw-bold">Market Value</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><p>FDX</p><p>FedEx Corporation</p></td>
                                        <td>700</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><p>FRC</p><p>First Republic Bank</p></td>
                                        <td>125</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><p>GOOG</p><p>Alphabet, Inc.</p></td>
                                        <td>1000</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><p>GOOG</p><p>Alphabet, Inc.</p></td>
                                        <td>20</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><p>CCL</p><p>Carnival Corporation & pic</p></td>
                                        <td>75</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><p>FTHCX</p><p>Facility Advisor Technology Fund Class C</p></td>
                                        <td>100</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><p>CTHRX</p><p>Columbia Global Technology, Growth Fund Institutional 2 Class </p></td>
                                        <td>100</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><p>CTHRX</p><p>Growth Fund In stitutional 2 Class </p></td>
                                        <td>100</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="closed-position" role="tabpanel" aria-labelledby="closed-position-tab">
                            <h1>closed-position</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="balances" role="tabpanel" aria-labelledby="balances-tab">
                ...
            </div>
        </div>

    </div>

</section>


<section class="secure-footer">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xl-1">
                <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i></p>
                <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i></p>
                <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i></p>
            </div>
            <div class="col-xl-3">
                <p><span class="stats"><i class="fa fa-caret-up"></i> 3.29% +23,684.02</span></p>
            </div>
            <div class="col-xl-3">
                <p><span class="stats"><i class="fa fa-caret-up"></i> 3.29% +23,684.02</span></p>
            </div>
            <div class="col-xl-4">
                <p><span class="stats"><i class="fa fa-caret-up"></i> 3.29% +23,684.02</span></p>
            </div>
        </div>
    </div>
</section>