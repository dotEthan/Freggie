<?php
    $title = "Freggie - Order Today!";
?>
<?php require_once( 'header.php' ); ?>

<div class="innercontain">
    <div id="ordertitle" class="title">
        Order Food
    </div>
    <div id="ordertabbox">
        <div class="ordertab active" id="1tab">Monday April 17th</div>
        <div class="ordertab" id="2tab">Tuesday April 18th</div>
        <div class="ordertab" id="3tab">Wednesday April 19th</div>
        <div class="ordertab" id="4tab">Thursday April 20th</div>
        <div class="ordertab" id="5tab">Friday April 21st</div>
    </div>
    <div class="orderformbox">

        <div class="orderform" id="1form">
            <div class="date">Monday April 17th</div>
            <div class="reqinfo">* - Required</div>
            <div class="orderinfo">
                <div class="orderinfoeach">
                    <div class="orderfield">Your Name*</div>
                    <div class="orderinput">
                        <input type="text" name="cusname" placeholder="First Last">
                    </div>
                </div>
                <div class="orderinfoeach">
                    <div class="orderfield">Your Email*</div>
                    <div class="orderinput">
                        <input type="email" name="cusemail" placeholder="email@domail.com">
                    </div>
                </div>
                <div class="orderinfoeach">
                    <div class="orderfield">Your Phone Number*</div>
                    <div class="orderinput">
                        <input type="text" name="cusphone" placeholder="xxx-xxx-xxxx">
                    </div>
                </div>
                <div class="orderinfoeach">
                    <div class="orderfield">What time is Lunch?*</div>
                    <div class="orderinput">
                        <input type="text" placeholder="12:00pm">
                    </div>
                </div>
            </div>
            <div class="foodtitle">
                <span class="entreespan">Entrée</span>
            </div>
            <div class="orderentreecont">
                <div class="orderentreebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Fried Rice Entree" src="http://www.freggie.ca/images/friedrice.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Vera's Homemade Fried Rice</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanytext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$7.50</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="orderentreebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Kale, Quinoa & Cranberry Salad" src="http://www.freggie.ca/images/quinoasalad.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Kale, Quinoa & Cranberry Salad</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanytext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$7.25</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foodtitle">
                <span class="entreespan">Side Dishes</span>
            </div>
            <div class="ordersidecont">
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Spicy Cold Noodles" src="http://www.freggie.ca/images/sidechinesenoodles.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Spicy Cold Noodles</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$3.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Veggies and Dill Dip" src="http://www.freggie.ca/images/sideveggiedip.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Veggies & Dill Dip</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$3.75</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Chocolate Banana Bread" src="http://www.freggie.ca/images/sidebananabread.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Chocolate Banana Bread</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$1.75</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Oatmeal Raisin Cookies" src="http://www.freggie.ca/images/sidecookies.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Oatmeal Raisin Cookies</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$1.50</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Cranberry Trial Mix" src="http://www.freggie.ca/images/sidetrailmix.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Cranberry Trial Mix</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$2.50</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Mixed Fruit Smoothie" src="http://www.freggie.ca/images/sidesmoothie.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Mixed Fruit Smoothie</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$3.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="specialorder">
                <div class="specialordertext">Special Orders:</div>
                <textarea rows="10" cols="30" type="textarea" name="specialorders"></textarea>
            </div>
            <button class="button sml" type="submit" name="submit">Order Food</button>
        </div>
        
        <div class="orderform hidden" id="2form">
            <div class="date">Tuesday April 18th</div>
            <div class="reqinfo">* - Required</div>
            <div class="orderinfo">
                <div class="orderinfoeach">
                    <div class="orderfield">Your Name*</div>
                    <div class="orderinput">
                        <input type="text" name="cusname" placeholder="First Last">
                    </div>
                    <div class="orderinfoeach">
                        <div class="orderfield">Your Email*</div>
                        <div class="orderinput">
                            <input type="email" name="cusemail" placeholder="email@domail.com">
                        </div>
                    </div>
                    <div class="orderinfoeach">
                        <div class="orderfield">Your Phone Number*</div>
                        <div class="orderinput">
                            <input type="text" name="cusphone" placeholder="xxx-xxx-xxxx">
                        </div>
                    </div>
                    <div class="orderinfoeach">
                        <div class="orderfield">What time is Lunch?*</div>
                        <div class="orderinput">
                            <input type="text" placeholder="12:00pm">
                        </div>
                    </div>
                </div>
            </div>
            <div class="foodtitle">
                <span class="entreespan">Entrée</span>
            </div>
            <div class="orderentrecont">
                <div class="orderentreebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Mapo Tofu" src="http://www.freggie.ca/images/mapotofu.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Mapo Tofu</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanytext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$7.25</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="orderentreebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Meaty Vegan Chili" src="http://www.freggie.ca/images/chili.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">"Meaty" Vegan Chili</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanytext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$6.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foodtitle">
                <span class="entreespan">Side Dishes</span>
            </div>
            <div class="ordersidecont">
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Cheesy Garlic Bread" src="http://www.freggie.ca/images/sidegarlicbread.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Cheesy Garlic Bread</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$1.50 for 2</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Veggies and Dill Dip" src="http://www.freggie.ca/images/sideveggiedip.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Veggies & Dill Dip</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$3.75</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ordersidecont">
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Chocolate Banana Bread" src="http://www.freggie.ca/images/sidebananabread.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Chocolate Banana Bread</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$1.75</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Oatmeal Raisin Cookies" src="http://www.freggie.ca/images/sidecookies.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Oatmeal Raisin Cookies</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$1.50</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ordersidecont">
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Cranberry Trial Mix" src="http://www.freggie.ca/images/sidetrailmix.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Cranberry Trial Mix</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$2.50</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Mixed Fruit Smoothie" src="http://www.freggie.ca/images/sidesmoothie.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Mixed Fruit Smoothie</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$3.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="specialorder">
                <div class="specialordertext">Special Orders:</div>
                <textarea rows="5" columns="30" type="textarea" name="specialorders"></textarea>
            </div>
            <button class="button sml" type="submit" name="submit">Order Food</button>
        </div>
        
        <div class="orderform hidden" id="3form">
            <div class="date">Wednesday April 19th</div>
            <div class="reqinfo">* - Required</div>
            <div class="orderinfo">
                <div class="orderinfoeach">
                    <div class="orderfield">Your Name*</div>
                    <div class="orderinput">
                        <input type="text" name="cusname" placeholder="First Last">
                    </div>
                    <div class="orderinfoeach">
                        <div class="orderfield">Your Email*</div>
                        <div class="orderinput">
                            <input type="email" name="cusemail" placeholder="email@domail.com">
                        </div>
                    </div>
                    <div class="orderinfoeach">
                        <div class="orderfield">Your Phone Number*</div>
                        <div class="orderinput">
                            <input type="text" name="cusphone" placeholder="xxx-xxx-xxxx">
                        </div>
                    </div>
                    <div class="orderinfoeach">
                        <div class="orderfield">What time is Lunch?*</div>
                        <div class="orderinput">
                            <input type="text" placeholder="12:00pm">
                        </div>
                    </div>
                </div>
            </div>
            <div class="foodtitle">
                <span class="entreespan">Entrée</span>
            </div>
            <div class="orderentrecont">
                <div class="orderentreebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Bean and Rice Burrito" src="http://www.freggie.ca/images/burrito.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Bean & Rice Burrito</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanytext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$7.50</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="orderentreebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Indian/Thai Curry" src="http://www.freggie.ca/images/curry.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Indian/Thai Curry</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanytext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$8.25</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foodtitle">
                <span class="entreespan">Side Dishes</span>
            </div>
            <div class="ordersidecont">
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Nachos, Salsa and Guacamole" src="http://www.freggie.ca/images/sidenachos.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Nachos, Salsa and Guacamole</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$3.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Bruschetta" src="http://www.freggie.ca/images/sidebruschetta.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Bruschetta</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$1.50 for two</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ordersidecont">
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Chocolate Banana Bread" src="http://www.freggie.ca/images/sidebananabread.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Chocolate Banana Bread</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$1.75</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Oatmeal Raisin Cookies" src="http://www.freggie.ca/images/sidecookies.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Oatmeal Raisin Cookies</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$1.50</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ordersidecont">
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Cranberry Trial Mix" src="http://www.freggie.ca/images/sidetrailmix.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Cranberry Trial Mix</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$2.50</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Mixed Fruit Smoothie" src="http://www.freggie.ca/images/sidesmoothie.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Mixed Fruit Smoothie</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$3.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="specialorder">
                <div class="specialordertext">Special Orders:</div>
                <textarea rows="5" columns="30" type="textarea" name="specialorders"></textarea>
            </div>
            <button class="button sml" type="submit" name="submit">Order Food</button>
        </div>
                
        <div class="orderform hidden" id="4form">
            <div class="date">Thursday April 20th</div>
            <div class="reqinfo">* - Required</div>
            <div class="orderinfo">
                <div class="orderinfoeach">
                    <div class="orderfield">Your Name*</div>
                    <div class="orderinput">
                        <input type="text" name="cusname" placeholder="First Last">
                    </div>
                    <div class="orderinfoeach">
                        <div class="orderfield">Your Email*</div>
                        <div class="orderinput">
                            <input type="email" name="cusemail" placeholder="email@domail.com">
                        </div>
                    </div>
                    <div class="orderinfoeach">
                        <div class="orderfield">Your Phone Number*</div>
                        <div class="orderinput">
                            <input type="text" name="cusphone" placeholder="xxx-xxx-xxxx">
                        </div>
                    </div>
                    <div class="orderinfoeach">
                        <div class="orderfield">What time is Lunch?*</div>
                        <div class="orderinput">
                            <input type="text" placeholder="12:00pm">
                        </div>
                    </div>
                </div>
            </div>
            <div class="foodtitle">
                <span class="entreespan">Entrée</span>
            </div>
            <div class="orderentrecont">
                <div class="orderentreebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Mapo Tofu" src="http://www.freggie.ca/images/mapotofu.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Mapo Tofu</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanytext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$7.25</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="orderentreebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Veggie Stir Fry" src="http://www.freggie.ca/images/stirfry.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Veggie Stir Fry</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanytext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$7.25</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foodtitle">
                <span class="entreespan">Side Dishes</span>
            </div>
            <div class="ordersidecont">
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Spicy Cold Noodles" src="http://www.freggie.ca/images/sidechinesenoodles.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Spicy Cold Noodles</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$3.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Veggies and Dill Dip" src="http://www.freggie.ca/images/sideveggiedip.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Veggies & Dill Dip</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$3.75</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ordersidecont">
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Chocolate Banana Bread" src="http://www.freggie.ca/images/sidebananabread.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Chocolate Banana Bread</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$1.75</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Oatmeal Raisin Cookies" src="http://www.freggie.ca/images/sidecookies.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Oatmeal Raisin Cookies</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$1.50</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ordersidecont">
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Cranberry Trial Mix" src="http://www.freggie.ca/images/sidetrailmix.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Cranberry Trial Mix</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$2.50</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Mixed Fruit Smoothie" src="http://www.freggie.ca/images/sidesmoothie.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Mixed Fruit Smoothie</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$3.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="specialorder">
                <div class="specialordertext">Special Orders:</div>
                <textarea rows="5" columns="30" type="textarea" name="specialorders"></textarea>
            </div>
            <button class="button sml" type="submit" name="submit">Order Food</button>
        </div>
                        
        <div class="orderform hidden" id="5form">
            <div class="date">Friday April 21st</div>
            <div class="reqinfo">* - Required</div>
            <div class="orderinfo">
                <div class="orderinfoeach">
                    <div class="orderfield">Your Name*</div>
                    <div class="orderinput">
                        <input type="text" name="cusname" placeholder="First Last">
                    </div>
                    <div class="orderinfoeach">
                        <div class="orderfield">Your Email*</div>
                        <div class="orderinput">
                            <input type="email" name="cusemail" placeholder="email@domail.com">
                        </div>
                    </div>
                    <div class="orderinfoeach">
                        <div class="orderfield">Your Phone Number*</div>
                        <div class="orderinput">
                            <input type="text" name="cusphone" placeholder="xxx-xxx-xxxx">
                        </div>
                    </div>
                    <div class="orderinfoeach">
                        <div class="orderfield">What time is Lunch?*</div>
                        <div class="orderinput">
                            <input type="text" placeholder="12:00pm">
                        </div>
                    </div>
                </div>
            </div>
            <div class="foodtitle">
                <span class="entreespan">Entrée</span>
            </div>
            <div class="orderentrecont">
                <div class="orderentreebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Chipotle 'Steak' Caesar Salad" src="http://www.freggie.ca/images/chipotle.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Chipotle 'Steak' Caesar Salad</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanytext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$8.25</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="orderentreebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Spinach Lasagna" src="http://www.freggie.ca/images/lasagna.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Spinach Lasagna</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanytext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$6.50</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foodtitle">
                <span class="entreespan">Side Dishes</span>
            </div>
            <div class="ordersidecont">
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Spicy Cold Noodles" src="http://www.freggie.ca/images/sidechinesenoodles.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Spicy Cold Noodles</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$3.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Sumac Chickpea Salad" src="http://www.freggie.ca/images/sidechickpeasalad.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Sumac Chickpea Salad</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$3.25</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ordersidecont">
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Chocolate Banana Bread" src="http://www.freggie.ca/images/sidebananabread.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Chocolate Banana Bread</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$1.75</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Oatmeal Raisin Cookies" src="http://www.freggie.ca/images/sidecookies.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Oatmeal Raisin Cookies</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$1.50</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ordersidecont">
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Cranberry Trial Mix" src="http://www.freggie.ca/images/sidetrailmix.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Cranberry Trial Mix</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$2.50</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ordersidebox">
                    <div class="orderentree">
                        <div class="orderentreepic"><img alt="Mixed Fruit Smoothie" src="http://www.freggie.ca/images/sidesmoothie.png"></div>
                        <div class="orderentreetext">
                            <div class="orderentreetitle">Mixed Fruit Smoothie</div>
                            <div class="muchmany">
                                <div class="howmany">
                                    <span class="howmanysidetext">How Many: </span><input id="howmanyinput" type="number" name="Howmany" placeholder="0">
                                </div>
                                <div class="howmuch">$3.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="specialorder">
                <div class="specialordertext">Special Orders:</div>
                <textarea rows="5" columns="30" type="textarea" name="specialorders"></textarea>
            </div>
            <button class="button sml" type="submit" name="submit">Order Food</button>
        </div>

    </div>
</div>

<?php require_once( 'footer.php' ); ?>