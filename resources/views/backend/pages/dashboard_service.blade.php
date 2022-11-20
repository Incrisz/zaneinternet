    <!-- Card Popup start -->
    <div class="card-popup">
        <div class="container-fruid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="modal fade" id="cardMod" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                                <div class="main-content">
                                    <div class="top-area mb-40 mt-40 text-center">
                                        <div class="card-area mb-30">
                                            <img src="{{ URL::asset('public/backend/images/pay.png') }}" alt="image">
                                        </div>
                                        <div class="text-area">
                                            <h5>Zane payment</h5>
                                            <!-- <p>Linked: 01 Jun 2021</p> -->
                                        </div>
                                    </div>
                                    <div class="tab-area d-flex align-items-center justify-content-between">
                                        <ul class="nav nav-tabs mb-30" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="btn-link" id="cancel-tab" data-bs-toggle="tab"
                                                    data-bs-target="#cancel" type="button" role="tab"
                                                    aria-controls="cancel" aria-selected="false">
                                                    <img src="{{ URL::asset('public/backend/images/icon/limit.png') }}" alt="icon">
                                                   Pay Now
                                                </button>
                                            </li>
                                      
                                        </ul>
                                    </div>
                                    <div class="tab-content mt-30">
                                     
                                        <div class="tab-pane fade" id="cancel" role="tabpanel"
                                            aria-labelledby="cancel-tab">
                                            <div class="main-area">
                                                <div class="transfer-area">
                                                    <!-- <p>Set a transfer limit for paylio payment Card</p> -->
                                                    <!-- <p class="mdr">Transfer Limit</p> -->
                                                </div>
                                                <form action="{{route('debit')}}" method="POST">
                                    @csrf 
                                                    <input name="id" id="post" value="" type="hidden">
                                                

                                                    <div class="input-area">
                                                        <input class="xxlr" id="post1" name="name" value="" readonly  type="text">
                                                        </div>
                                                        <div class="input-area">
                                                        <input class="xxlr" id="post2" name="amount" value="" readonly  type="text">
                                                        <select>                                                            <option value="1">NGN</option>
                                                          
                                                        </select>
                                                    </div>
                                                    <div
                                                        class="bottom-area d-flex align-items-center justify-content-between">
                                                        <!-- <a href="javascript:void(0)" class="cmn-btn cancel">Cancel and
                                                            Back</a> -->
                                                        <!-- <a href="javascript:void(0)" class="cmn-btn">Confirm </a> -->
                                                        <input type="submit" class="cmn-btn" value="Confirm">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card Popup start -->
<?php
 $services ;

?>

    <script>

function myPay(btn) {
    var collectId = btn.id;
    var service = <?php echo json_encode($services); ?>;
    // console.log(service[1]["id"]);

    for (let i = 0; i < service.length; i++) {
        if (service[i]["id"] == collectId) {
            var id = service[i]["id"];
            var name = service[i]["name"];
            var amount = service[i]["amount"];
            document.getElementById("post").value = id;
            document.getElementById("post1").value = name;
            document.getElementById("post2").value = amount;
        }
     
        
    }


}
    </script>