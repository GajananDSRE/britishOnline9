<template>
    <div>
        <section class="service-wrapper py-3" id="service">
            <div class="container-fluid pb-3">
                <div class="row justify-content-center">
                    <div class="section-heading1 ">
                        <h2>Wallet<em> Transfer</em></h2>
                        <img :src="origin_path + '/images/line-dec.png'" alt="waves">
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 mb-3">
                        <form class="wallet">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="text1">From</label>
                                        <select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5">
                                            <optgroup data-max-options="2">
                                                <optgroup label="Site wallet">BritishOnline9
                                                    <option>Bullexch.com</option>
                                                </optgroup>
                                                <optgroup label=" Exchange wallet">BritishOnline9</optgroup>
                                                <option>Bullexch.com</option>
                                                <option>Betdaily.site</option>
                                                <option>Britishonline9.com</option>
                                                <option>Dafa.com</option>
                                                <option>Bullexch.com</option>
                                                <option>Betdaily.site</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="text1">To</label>
                                        <select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5">
                                            <optgroup data-max-options="2">
                                                <optgroup data-max-options="2">
                                                    <optgroup label="Site wallet">BritishOnline9
                                                        <option>BritishOnline9</option>
                                                    </optgroup>
                                                    <optgroup label=" Exchange wallet">BritishOnline9</optgroup>
                                                    <option>Bullexch.com</option>
                                                    <option>Betdaily.site</option>
                                                    <option>Britishonline9.com</option>
                                                    <option>Dafa.com</option>
                                                    <option>Bullexch.com</option>
                                                    <option>Betdaily.site</option>
                                                </optgroup>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text1">User Id</label>
                                <input class="form-control" type="text" placeholder="Johnny Brown">
                            </div>
                            <div class="form-group">
                                <label class="text1">Name</label>
                                <input class="form-control" type="text" placeholder="Kaka11">
                            </div>
                            <div class="form-group">
                                <label class="text1">Balance</label>
                                <input class="form-control" type="text" placeholder="$20000">
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group ">
                                        <label class="text1">Message</label>
                                        <input type="text" class="form-control msg" placeholder="Message Drop Here...">
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-md-5 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-12 ">
                                    <button type="button" class="btn btn-primary w-30">Transfer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div id="map">
                        <img :src="origin_path + '/images/aaa.jpg'" alt="" style="width: 150%;">
                            <!-- <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen=""></iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
export default {
    data() {
        return {
            origin_path: window.location.origin,
        }
    },   
}
</script>