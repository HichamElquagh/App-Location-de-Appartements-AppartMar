

@include('header');
{{-- 
  <!-- Slideshow Header -->
  <div class="w3-container" id="apartment">
        <h2 class="w3-text-green">The Apartment</h2>
        <div class="w3-display-container mySlides">
        <img src="/w3images/livingroom.jpg" style="width:100%;margin-bottom:-6px">
          <div class="w3-display-bottomleft w3-container w3-black">
            <p>Living Room</p>
          </div>
        </div>
        <div class="w3-display-container mySlides">
        <img src="/w3images/diningroom.jpg" style="width:100%;margin-bottom:-6px">
          <div class="w3-display-bottomleft w3-container w3-black">
            <p>Dining Room</p>
          </div>
        </div>
        <div class="w3-display-container mySlides">
        <img src="/w3images/bedroom.jpg" style="width:100%;margin-bottom:-6px">
          <div class="w3-display-bottomleft w3-container w3-black">
            <p>Bedroom</p>
          </div>
        </div>
        <div class="w3-display-container mySlides">
        <img src="/w3images/livingroom2.jpg" style="width:100%;margin-bottom:-6px">
          <div class="w3-display-bottomleft w3-container w3-black">
            <p>Living Room II</p>
          </div>
        </div>
      </div>
      <div class="w3-row-padding w3-section">
        <div class="w3-col s3">
          <img class="demo w3-opacity w3-hover-opacity-off" src="/w3images/livingroom.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)" title="Living room">
        </div>
        <div class="w3-col s3">
          <img class="demo w3-opacity w3-hover-opacity-off" src="/w3images/diningroom.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(2)" title="Dining room">
        </div>
        <div class="w3-col s3">
          <img class="demo w3-opacity w3-hover-opacity-off" src="/w3images/bedroom.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(3)" title="Bedroom">
        </div>
        <div class="w3-col s3">
          <img class="demo w3-opacity w3-hover-opacity-off" src="/w3images/livingroom2.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(4)" title="Second Living Room">
        </div>
      </div> --}}


         <div class="d-flex justify-content-end container">
      <div class="border border-dark rounded w-25 px-4">
        <div class='booking-widget__header'>
            <figure>
              <img src='http://www.unjourdeplusaparis.com/files/2013/07/Hotel-Keppler.gif'>
              <figcaption class='header-caption'>
                <h3 id="">Reservation</h3>
                <span id=""><i class="fa fa-map-marker" aria-hidden="true"></i> Paris, France</span>
              </figcaption>         
            </figure>
        </div>
        <form>
            <ul class='booking-widget__form'>
                <li>
                    <label for='check-in'>Check in</label>
                    <div id='check-in' class='form-field'>
                        <input type="text" value="" placeholder="9 July, 2016">
                        <div class='datepicker'><i class="fa fa-calendar" aria-hidden="true"></i></div>
                    </div>
                </li>
                <li>
                    <label for='check-in'>Check out</label>
                    <div id='check-out' class='form-field'>
                        <input type="text" value="" placeholder="19 July, 2016">
                        <div class='datepicker'><i class="fa fa-calendar" aria-hidden="true"></i></div>
                    </div>
                </li>
                <li>
                  <div class=' form-field form-field__checkbox'>
                    <input type="checkbox" id='flexibleDates' value="">
                  </div>
                    <label for="flexibleDates">Flexible dates</label>
                </li>
                <li>
                    <div class='form__dropdown'>
                        <label for='adultsAmount'>Adults</label>
                        <div class='form-field'> 
                        <select id='adultsAmount'>    
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                        </select>
                        <div class='select-button'><i class="fa fa-caret-down" aria-hidden="true"></i></div>
                    </div>
                    </div>
                    <div class='form__dropdown'>
                        <label for='childrenAmount'>Children</label>
                        <br>
                      <div class='form-field'> 
                        <select id='childrenAmount'> 
                                <option value="0" selected="selected"></option>                        
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                        </select>
                        <div class='select-button'><i class="fa fa-caret-down" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </li>
                <li>
                    <input type="submit" id='bookingSubmit' class='form__submit' value='Search rooms'>
                </li>
            </ul>       
        </form>
    </div>
</div>
    