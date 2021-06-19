@extends('dashboard.master')        
 @section('content')
        <div class="content-area">
          <div class="row row-cards-one">

            <div class="col-md-12 col-sm-12 col-lg-12  " >
                <div class="date">
                   <form>
                       <div class="input-group mb-3 input-group-md">
                         <div class="input-group-prepend">
                           <span class="input-group-text">
                               <i class="fas fa-search"></i>
                           </span>
                         </div>
                         <input type="date" class="form-control">
                       </div>
                     </form>

               </div>
             </div>
              <div class="col-md-12 col-lg-6 col-xl-3">
                  <div class="mycard bg1">
                      <div class="left">
                          <h5 class="title">Orders Pending! </h5>
                          <span class="number">373</span>
                          <a href="#" class="link">View All</a>
                      </div>
                      <div class="right d-flex align-self-center">
                          <div class="icon">
                            <i class="fas fa-dollar-sign"></i>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-3">
                  <div class="mycard bg2">
                      <div class="left">
                          <h5 class="title">Orders Procsessing!</h5>
                          <span class="number">0</span>
                          <a href="#" class="link">View All</a>
                      </div>
                      <div class="right d-flex align-self-center">
                          <div class="icon">
                            <i class="fas fa-dollar-sign"></i>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-3">
                  <div class="mycard bg3">
                      <div class="left">
                          <h5 class="title">Orders Completed!</h5>
                          <span class="number">16</span>
                          <a href="#" class="link">View All</a>
                      </div>
                      <div class="right d-flex align-self-center">
                          <div class="icon">
                            <i class="fas fa-dollar-sign"></i>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-3">
                <div class="mycard bg7">
                    <div class="left">
                        <h5 class="title">Orders Completed!</h5>
                        <span class="number">16</span>
                        <a href="#" class="link">View All</a>
                    </div>
                    <div class="right d-flex align-self-center">
                        <div class="icon">
                          <i class="fas fa-dollar-sign"></i>
                        </div>
                    </div>
                </div>
            </div>
              <div class="col-md-12 col-lg-6 col-xl-3">
                  <div class="mycard bg4">
                      <div class="left">
                          <h5 class="title">Total Products!</h5>
                          <span class="number">52</span>
                          <a href="#" class="link">View All</a>
                      </div>
                      <div class="right d-flex align-self-center">
                          <div class="icon">
                            <i class="fas fa-dollar-sign"></i>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-3">
                  <div class="mycard bg5">
                      <div class="left">
                          <h5 class="title">Total Customers!</h5>
                          <span class="number">129</span>
                          <a href="#" class="link">View All</a>
                      </div>
                      <div class="right d-flex align-self-center">
                          <div class="icon">
                            <i class="fas fa-dollar-sign"></i>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-3">
                  <div class="mycard bg6">
                      <div class="left">
                          <h5 class="title">Total Posts!</h5>
                          <span class="number">15</span>
                          <a href="#" class="link">View All</a>
                      </div>
                      <div class="right d-flex align-self-center">
                          <div class="icon"><i class="fas fa-dollar-sign"></i>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-3">
                <div class="mycard bg8">
                    <div class="left">
                        <h5 class="title">Total Posts!</h5>
                        <span class="number">15</span>
                        <a href="#" class="link">View All</a>
                    </div>
                    <div class="right d-flex align-self-center">
                        <div class="icon"><i class="fas fa-dollar-sign"></i>
                        </div>
                    </div>
                </div>
            </div>
      
          </div>
      
          <div class="row row-cards-one">
            <div class="col-md-12 col-sm-12 col-lg-12  " >
                <div class="date">
                   <form>
                       <div class="input-group mb-3 input-group-md">
                         <div class="input-group-prepend">
                           <span class="input-group-text">
                               <i class="fas fa-search"></i>
                           </span>
                         </div>
                         <input type="date" class="form-control">
                       </div>
                     </form>

               </div>
             </div>
              <div class="col-md-6 col-xl-3">
                  <div class="card c-info-box-area">
                      <div class="c-info-box box1">
                          <p>14</p>
                      </div>
                      <div class="c-info-box-content">
                          <h6 class="title">New Customers</h6>
                          <p class="text">Last 30 Days</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-xl-3">
                  <div class="card c-info-box-area">
                      <div class="c-info-box box2">
                          <p>129</p>
                      </div>
                      <div class="c-info-box-content">
                          <h6 class="title">Total Customers</h6>
                          <p class="text">All Time</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-xl-3">
                  <div class="card c-info-box-area">
                      <div class="c-info-box box3">
                          <p>4</p>
                      </div>
                      <div class="c-info-box-content">
                          <h6 class="title">Total Sales</h6>
                          <p class="text">Last 30 days</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-xl-3">
                  <div class="card c-info-box-area">
                      <div class="c-info-box box4">
                           <p>16</p>
                      </div>
                      <div class="c-info-box-content">
                          <h6 class="title">Total Sales</h6>
                          <p class="text">All Time</p>
                      </div>
                  </div>
              </div>
          </div>
      
          <div class="row row-cards-one">
      
              <div class="col-md-6 col-lg-6 col-xl-6">
                  <div class="card">
                      <h5 class="card-header">Recent Order(s)</h5>
                      <div class="card-body">
      
                          <div class="my-table-responsiv">
                              <table class="table table-hover dt-responsive" cellspacing="0" width="100%">
                                  <thead>
                                      <tr>
      
                                          <th>Order Number</th>
                                          <th>Order Date</th>
                                      </tr>
                                                                      <tr>
                                          <td>C6SuD6uHdC</td>
                                          <td>2021-06-07</td>
                                          <td>
                                              <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/order/410/show"><i class="fas fa-eye"></i> Details</a>
                                              </div>
                                          </td>
                                      </tr>
                                                                      <tr>
                                          <td>8ohp9a19gZ</td>
                                          <td>2021-06-07</td>
                                          <td>
                                              <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/order/409/show"><i class="fas fa-eye"></i> Details</a>
                                              </div>
                                          </td>
                                      </tr>
                                                                      <tr>
                                          <td>rTbPnmq7Dt</td>
                                          <td>2021-06-07</td>
                                          <td>
                                              <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/order/408/show"><i class="fas fa-eye"></i> Details</a>
                                              </div>
                                          </td>
                                      </tr>
                                                                      <tr>
                                          <td>KWDw2sDCbR</td>
                                          <td>2021-06-07</td>
                                          <td>
                                              <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/order/407/show"><i class="fas fa-eye"></i> Details</a>
                                              </div>
                                          </td>
                                      </tr>
                                                                      <tr>
                                          <td>umaStqLdDN</td>
                                          <td>2021-06-07</td>
                                          <td>
                                              <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/order/406/show"><i class="fas fa-eye"></i> Details</a>
                                              </div>
                                          </td>
                                      </tr>
                                                                  </thead>
                              </table>
                          </div>
      
                      </div>
                  </div>
      
              </div>
      
              <div class="col-md-6 col-lg-6 col-xl-6">
                      <div class="card">
                              <h5 class="card-header">Recent Customer(s)</h5>
                              <div class="card-body">
              
                                  <div class="my-table-responsiv">
                                      <table class="table table-hover dt-responsive" cellspacing="0" width="100%">
                                          <thead>
                                              <tr>
                                                  <th>Customer Email</th>
                                                  <th>Joined</th>
                                              </tr>
                                                                                      <tr>
                                                  <td>harshitagarwal333@gmail.com</td>
                                                  <td>2021-06-06 10:01:59</td>
                                                  <td>
                                                      <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/user/154/show"><i class="fas fa-eye"></i> Details</a>
                                                      </div>
                                                  </td>
                                              </tr>
                                                                                      <tr>
                                                  <td>toto.naughty140416@gmail.com</td>
                                                  <td>2021-06-03 02:06:16</td>
                                                  <td>
                                                      <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/user/153/show"><i class="fas fa-eye"></i> Details</a>
                                                      </div>
                                                  </td>
                                              </tr>
                                                                                      <tr>
                                                  <td>hamidsaeedpro@gmail.com</td>
                                                  <td>2021-06-01 15:29:14</td>
                                                  <td>
                                                      <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/user/152/show"><i class="fas fa-eye"></i> Details</a>
                                                      </div>
                                                  </td>
                                              </tr>
                                                                                      <tr>
                                                  <td>deepakpandey841441@gmail.com</td>
                                                  <td>2021-05-30 12:51:07</td>
                                                  <td>
                                                      <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/user/151/show"><i class="fas fa-eye"></i> Details</a>
                                                      </div>
                                                  </td>
                                              </tr>
                                                                                      <tr>
                                                  <td>g@yopmail.com</td>
                                                  <td>2021-05-27 12:22:21</td>
                                                  <td>
                                                      <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/user/150/show"><i class="fas fa-eye"></i> Details</a>
                                                      </div>
                                                  </td>
                                              </tr>
                                                                                  </thead>
                                      </table>
                                  </div>
              
                              </div>
                          </div>
              </div>
          </div>
      
          <div class="row row-cards-one">
      
                  <div class="col-md-12 col-lg-12 col-xl-12">
                          <div class="card">
                                  <h5 class="card-header">Popular Product(s)</h5>
                                  <div class="card-body">
                  
                                      <div class="table-responsiv  dashboard-home-table">
                                          <div id="poproducts_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row btn-area"><div class="col-sm-4"></div><div class="col-sm-4"></div></div><div class="row"><div class="col-sm-12"><table id="poproducts" class="table table-hover dt-responsive dataTable no-footer dtr-inline" cellspacing="0" width="100%" role="grid">
                                              <thead>
                                                  <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1">Featured Image</th><th class="sorting_disabled" rowspan="1" colspan="1" style="">Name</th><th class="sorting_disabled" rowspan="1" colspan="1" style="">Category</th><th class="sorting_disabled" rowspan="1" colspan="1" style="">Type</th><th class="sorting_disabled" rowspan="1" colspan="1" style="">Price</th><th class="sorting_disabled" rowspan="1" colspan="1" style=""></th></tr>
                                              </thead>
                                              <tbody>
                                                                                              
                                                                                              
                                                                                              
                                                                                              
                                                                                              
                                                                                          <tr role="row" class="odd">
                                                  <td tabindex="0"><img src="./Dashboard/1568026368qU5AILZo.png"></td>
                                                  <td style="">Physical Product Title Title will Be Here 100</td>
                                                  <td style="">Fashion &amp; Beauty
                                                                                                              <br>
                                                          BAGS
                                                                                                                                                                  <br>
                                                          Deleted
                                                                                                          </td>
                                                      <td style="">Physical</td>
      
                                                      <td style=""> $130 </td>
      
                                                      <td style="">
                                                          <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/products/edit/100"><i class="fas fa-eye"></i> Details</a>
                                                          </div>
                                                      </td>
                                                  </tr><tr role="row" class="even">
                                                  <td tabindex="0"><img src="./Dashboard/1568026326RDSwScJe.png"></td>
                                                  <td style="">Physical Product Title Title will Be Here 101</td>
                                                  <td style="">Fashion &amp; Beauty
                                                                                                              <br>
                                                          BAGS
                                                                                                                                                                  <br>
                                                          Deleted
                                                                                                          </td>
                                                      <td style="">Physical</td>
      
                                                      <td style=""> $130 </td>
      
                                                      <td style="">
                                                          <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/products/edit/101"><i class="fas fa-eye"></i> Details</a>
                                                          </div>
                                                      </td>
                                                  </tr><tr role="row" class="odd">
                                                  <td tabindex="0"><img src="./Dashboard/1568027732dTwHda8l.png"></td>
                                                  <td style="">Affiliate Product Title will Be Here. Affiliate Pr...</td>
                                                  <td style="">Electronic
                                                                                                              <br>
                                                          Deleted
                                                                                                                                                                  <br>
                                                          Deleted
                                                                                                          </td>
                                                      <td style="">Physical</td>
      
                                                      <td style=""> $57.5 </td>
      
                                                      <td style="">
                                                          <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/products/edit/95"><i class="fas fa-eye"></i> Details</a>
                                                          </div>
                                                      </td>
                                                  </tr><tr role="row" class="even">
                                                  <td tabindex="0"><img src="./Dashboard/15680264040zpMCpmS.png"></td>
                                                  <td style="">Physical Product Title Title will Be Here 99</td>
                                                  <td style="">Fashion &amp; Beauty
                                                                                                              <br>
                                                          BAGS
                                                                                                                                                                  <br>
                                                          Deleted
                                                                                                          </td>
                                                      <td style="">Physical</td>
      
                                                      <td style=""> $130 </td>
      
                                                      <td style="">
                                                          <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/products/edit/99"><i class="fas fa-eye"></i> Details</a>
                                                          </div>
                                                      </td>
                                                  </tr><tr role="row" class="odd">
                                                  <td tabindex="0"><img src="./Dashboard/1568026462TxRJ07FG.png"></td>
                                                  <td style="">Physical Product Title Title will Be Here 97</td>
                                                  <td style="">Fashion &amp; Beauty
                                                                                                              <br>
                                                          BAGS
                                                                                                                                                                  <br>
                                                          Deleted
                                                                                                          </td>
                                                      <td style="">Physical</td>
      
                                                      <td style=""> $130 </td>
      
                                                      <td style="">
                                                          <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/products/edit/97"><i class="fas fa-eye"></i> Details</a>
                                                          </div>
                                                      </td>
                                                  </tr></tbody>
                                          </table></div></div><div class="row"><div class="col-sm-12 col-md-5"></div><div class="col-sm-12 col-md-7"></div></div></div>
                                      </div>
                                  </div>
                              </div>
          
                  </div>
          
              </div>
      
          <div class="row row-cards-one">
      
                  <div class="col-md-12 col-lg-12 col-xl-12">
                          <div class="card">
                                  <h5 class="card-header">Recent Product(s)</h5>
                                  <div class="card-body">
                  
                                      <div class="table-responsiv dashboard-home-table">
                                          <div id="pproducts_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row btn-area"><div class="col-sm-4"></div><div class="col-sm-4"></div></div><div class="row"><div class="col-sm-12"><table id="pproducts" class="table table-hover dt-responsive dataTable no-footer dtr-inline" cellspacing="0" width="100%" role="grid">
                                                  <thead>
                                                          <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1">Featured Image</th><th class="sorting_disabled" rowspan="1" colspan="1" style="">Name</th><th class="sorting_disabled" rowspan="1" colspan="1" style="">Category</th><th class="sorting_disabled" rowspan="1" colspan="1" style="">Type</th><th class="sorting_disabled" rowspan="1" colspan="1" style="">Price</th><th class="sorting_disabled" rowspan="1" colspan="1" style=""></th></tr>
                                                      </thead>
                                                      <tbody>
                                                                                                              
                                                                                                              
                                                                                                              
                                                                                                              
                                                                                                              
                                                                                                          <tr role="row" class="odd">
                                                          <td tabindex="0"><img src="./Dashboard/1570877254IpMreGOE.jpg"></td>
                                                          <td style="">Physical Product Title Title will Be Here 99u</td>
                                                          <td style="">Fashion &amp; Beauty
                                                                                                                      <br>
                                                              BAGS
                                                                                                                                                                              <br>
                                                              Deleted
                                                                                                                  </td>
                                                              <td style="">Physical</td>
                                                              <td style=""> $130 </td>
                                                              <td style="">
                                                                  <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/products/edit/180"><i class="fas fa-eye"></i> Details</a>
                                                                  </div>
                                                              </td>
                                                          </tr><tr role="row" class="even">
                                                          <td tabindex="0"><img src="./Dashboard/1570877127ByWwIJUA.jpg"></td>
                                                          <td style="">Physical Product Title Title will Be Here 99</td>
                                                          <td style="">Fashion &amp; Beauty
                                                                                                                      <br>
                                                              BAGS
                                                                                                                                                                              <br>
                                                              Deleted
                                                                                                                  </td>
                                                              <td style="">Physical</td>
                                                              <td style=""> $130 </td>
                                                              <td style="">
                                                                  <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/products/edit/179"><i class="fas fa-eye"></i> Details</a>
                                                                  </div>
                                                              </td>
                                                          </tr><tr role="row" class="odd">
                                                          <td tabindex="0"><img src="./Dashboard/1570876820YXbcdnxW.jpg"></td>
                                                          <td style="">Physical Product Title Title will Be Here 99</td>
                                                          <td style="">Fashion &amp; Beauty
                                                                                                                      <br>
                                                              BAGS
                                                                                                                                                                              <br>
                                                              Deleted
                                                                                                                  </td>
                                                              <td style="">Physical</td>
                                                              <td style=""> $130 </td>
                                                              <td style="">
                                                                  <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/products/edit/178"><i class="fas fa-eye"></i> Details</a>
                                                                  </div>
                                                              </td>
                                                          </tr><tr role="row" class="even">
                                                          <td tabindex="0"><img src="./Dashboard/1570876503CUOkgSFD.jpg"></td>
                                                          <td style="">Physical Product Title Title will Be Here 102</td>
                                                          <td style="">Fashion &amp; Beauty
                                                                                                                      <br>
                                                              BAGS
                                                                                                                                                                              <br>
                                                              Deleted
                                                                                                                  </td>
                                                              <td style="">Physical</td>
                                                              <td style=""> $130 </td>
                                                              <td style="">
                                                                  <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/products/edit/175"><i class="fas fa-eye"></i> Details</a>
                                                                  </div>
                                                              </td>
                                                          </tr><tr role="row" class="odd">
                                                          <td tabindex="0"><img src="./Dashboard/1570876303dcztUot8.jpg"></td>
                                                          <td style="">Physical Product Title Title will Be Here 0131 Tes...</td>
                                                          <td style="">Fashion &amp; Beauty
                                                                                                                      <br>
                                                              Deleted
                                                                                                                                                                              <br>
                                                              Deleted
                                                                                                                  </td>
                                                              <td style="">Physical</td>
                                                              <td style=""> $151 </td>
                                                              <td style="">
                                                                  <div class="action-list"><a href="https://geniuscart.royalscripts.com/admin/products/edit/174"><i class="fas fa-eye"></i> Details</a>
                                                                  </div>
                                                              </td>
                                                          </tr></tbody>
                                          </table></div></div><div class="row"><div class="col-sm-12 col-md-5"></div><div class="col-sm-12 col-md-7"></div></div></div>
                                      </div>
                  
                                  </div>
                              </div>
          
                  </div>
          
              </div>
      
          <div class="row row-cards-one">
      
              <div class="col-md-12 col-lg-12 col-xl-12">
                  <div class="card">
                      <h5 class="card-header">Total Sales in Last 30 Days</h5>
                      <div class="card-body">
      
                          <canvas id="lineChart" width="1009" height="416" style="width: 1009px; height: 416px;"></canvas>
      
                      </div>
                  </div>
      
              </div>
      
          </div>
      
      
      
      
          <div class="row row-cards-one">
      
              <div class="col-md-6 col-lg-6 col-xl-6">
                  <div class="card">
                      <h5 class="card-header">Top Referrals</h5>
                      <div class="card-body">
                          <div class="admin-fix-height-card">
                               <div id="chartContainer-topReference"><div class="canvasjs-chart-container" style="position: relative; text-align: left; cursor: auto;"><canvas class="canvasjs-chart-canvas" width="450" height="400" style="position: absolute;"></canvas><canvas class="canvasjs-chart-canvas" width="450" height="400" style="position: absolute;"></canvas><div class="canvasjs-chart-toolbar" style="position: absolute; right: 1px; top: 1px; border: 1px solid transparent;"><button state="menu" type="button" title="More Options" style="background-color: white; color: black; border: none; user-select: none; padding: 5px 12px; cursor: pointer; float: left; width: 40px; height: 25px; outline: 0px; vertical-align: baseline; line-height: 0; display: inline;"><img style="height:95%;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAeCAYAAABE4bxTAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADoSURBVFhH7dc9CsJAFATgRxIIBCwCqZKATX5sbawsY2MvWOtF9AB6AU8gguAJbD2AnZ2VXQT/Ko2TYGCL2OYtYQc+BuYA+1hCtnCVwMm27SGaXpDJIAiCvCkVR05hGOZNN3HkFMdx3nQRR06+76/R1IcFLJlNQEWlmWlBTwJtKLKHynehZqnjOGM0PYWRVXk61C37p7xlZ3Hk5HneCk1dmMH811xGoKLSzDiQwIBZB4ocoPJdqNkDt2yKlueWRVGUtzy3rPwo3sWRU3nLjuLI6OO67oZM00wMw3hrmpZx0XU9syxrR0T0BeMpb9dneSR2AAAAAElFTkSuQmCC" alt="More Options"></button><div tabindex="-1" style="position: absolute; user-select: none; cursor: pointer; right: 0px; top: 25px; min-width: 120px; outline: 0px; font-size: 14px; font-family: Arial, Helvetica, sans-serif; padding: 5px 0px; text-align: left; line-height: 10px; background-color: white; box-shadow: rgb(136, 136, 136) 2px 2px 10px; display: none;"><div style="padding: 12px 8px; background-color: white; color: black;">Print</div><div style="padding: 12px 8px; background-color: white; color: black;">Save as JPEG</div><div style="padding: 12px 8px; background-color: white; color: black;">Save as PNG</div></div></div><div class="canvasjs-chart-tooltip" style="position: absolute; height: auto; box-shadow: rgba(0, 0, 0, 0.1) 1px 1px 2px 2px; z-index: 1000; pointer-events: none; display: none; border-radius: 5px;"><div style=" width: auto;height: auto;min-width: 50px;line-height: auto;margin: 0px 0px 0px 0px;padding: 5px;font-family: Calibri, Arial, Georgia, serif;font-weight: normal;font-style: italic;font-size: 14px;color: #000000;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);text-align: left;border: 2px solid gray;background: rgba(255,255,255,.9);text-indent: 0px;white-space: nowrap;border-radius: 5px;-moz-user-select:none;-khtml-user-select: none;-webkit-user-select: none;-ms-user-select: none;user-select: none;} "> Sample Tooltip</div></div></div></div>
                          </div>
                             
                      </div>
                  </div>
      
              </div>
      
              <div class="col-md-6 col-lg-6 col-xl-6">
                      <div class="card">
                              <h5 class="card-header">Most Used OS</h5>
                              <div class="card-body">
      <div class="admin-fix-height-card">
                              <div id="chartContainer-os"><div class="canvasjs-chart-container" style="position: relative; text-align: left; cursor: auto;"><canvas class="canvasjs-chart-canvas" width="450" height="400" style="position: absolute;"></canvas><canvas class="canvasjs-chart-canvas" width="450" height="400" style="position: absolute;"></canvas><div class="canvasjs-chart-toolbar" style="position: absolute; right: 1px; top: 1px; border: 1px solid transparent;"><button state="menu" type="button" title="More Options" style="background-color: white; color: black; border: none; user-select: none; padding: 5px 12px; cursor: pointer; float: left; width: 40px; height: 25px; outline: 0px; vertical-align: baseline; line-height: 0; display: inline;"><img style="height:95%;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAeCAYAAABE4bxTAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADoSURBVFhH7dc9CsJAFATgRxIIBCwCqZKATX5sbawsY2MvWOtF9AB6AU8gguAJbD2AnZ2VXQT/Ko2TYGCL2OYtYQc+BuYA+1hCtnCVwMm27SGaXpDJIAiCvCkVR05hGOZNN3HkFMdx3nQRR06+76/R1IcFLJlNQEWlmWlBTwJtKLKHynehZqnjOGM0PYWRVXk61C37p7xlZ3Hk5HneCk1dmMH811xGoKLSzDiQwIBZB4ocoPJdqNkDt2yKlueWRVGUtzy3rPwo3sWRU3nLjuLI6OO67oZM00wMw3hrmpZx0XU9syxrR0T0BeMpb9dneSR2AAAAAElFTkSuQmCC" alt="More Options"></button><div tabindex="-1" style="position: absolute; user-select: none; cursor: pointer; right: 0px; top: 25px; min-width: 120px; outline: 0px; font-size: 14px; font-family: Arial, Helvetica, sans-serif; padding: 5px 0px; text-align: left; line-height: 10px; background-color: white; box-shadow: rgb(136, 136, 136) 2px 2px 10px; display: none;"><div style="padding: 12px 8px; background-color: white; color: black;">Print</div><div style="padding: 12px 8px; background-color: white; color: black;">Save as JPEG</div><div style="padding: 12px 8px; background-color: white; color: black;">Save as PNG</div></div></div><div class="canvasjs-chart-tooltip" style="position: absolute; height: auto; box-shadow: rgba(0, 0, 0, 0.1) 1px 1px 2px 2px; z-index: 1000; pointer-events: none; display: none; border-radius: 5px;"><div style=" width: auto;height: auto;min-width: 50px;line-height: auto;margin: 0px 0px 0px 0px;padding: 5px;font-family: Calibri, Arial, Georgia, serif;font-weight: normal;font-style: italic;font-size: 14px;color: #000000;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);text-align: left;border: 2px solid gray;background: rgba(255,255,255,.9);text-indent: 0px;white-space: nowrap;border-radius: 5px;-moz-user-select:none;-khtml-user-select: none;-webkit-user-select: none;-ms-user-select: none;user-select: none;} "> Sample Tooltip</div></div></div></div>
      </div>
                              </div>
                          </div>
              </div>
              
          </div>
      
      
      
      </div>
      
                <!-- Main Content Area End -->
                </div>
              </div>
  
      
 @endsection