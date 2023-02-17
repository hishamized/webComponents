<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/1bc2765d38.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <section class="form-container">
        <form class="form" action="">
            <div class="form-header">
            <a href="#"><i class="fa-sharp fa-solid fa-share-nodes icons"></i></a>
            <h3>Rate Us</h3>
            <a href="#"><i class="fa-solid fa-circle-down icons"></i></a> 
            </div>
            <div class="form-item">
                <label for="name">The Name</label>
                <input type="text" id="name" placeholder="The Name">
            </div>
            <div class="form-item">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" placeholder="Phone Number">
            </div>
            <div class="form-item">
                <label for="branches">Branches</label>
                <select name="branches" id="branches">
                    <option value="The Tone">The Tone</option>
                    <option value="The Tone">The Tone</option>
                    <option value="The Tone">The Tone</option>
                    <option value="The Tone">The Tone</option>
                </select>
            </div>
            <div class="form-item">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="5"></textarea>
            </div>
            <br>
        <div class="rating-container form-item">
            <div class="rating-row">
                <p>Eat</p>
                <div class="raing-stars">
                    <fieldset class="rating">
                        <input class="star star-5" id="star-5" type="radio" name="eat"/>
                        <label class="star star-5" for="star-5"></label>
                        <input class="star star-4" id="star-4" type="radio" name="eat"/>
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" id="star-3" type="radio" name="eat"/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" id="star-2" type="radio" name="eat"/>
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" id="star-1" type="radio" name="eat"/>
                        <label class="star star-1" for="star-1"></label>
                    </fieldset>
                </div>
            </div>
            <div class="rating-row">
                <p>Place</p>
                <div class="rating-stars">
                <fieldset class="rating">
                        <input class="star star-5" id="star-10" type="radio" name="Place"/>
                        <label class="star star-5" for="star-10"></label>
                        <input class="star star-4" id="star-9" type="radio" name="Place"/>
                        <label class="star star-4" for="star-9"></label>
                        <input class="star star-3" id="star-8" type="radio" name="Place"/>
                        <label class="star star-3" for="star-8"></label>
                        <input class="star star-2" id="star-7" type="radio" name="Place"/>
                        <label class="star star-2" for="star-7"></label>
                        <input class="star star-1" id="star-6" type="radio" name="Place"/>
                        <label class="star star-1" for="star-6"></label>
                </fieldset>
                </div>
            </div>
            <div class="rating-row">
                <p>Service</p>
                <div class="rating-stars">
                        <input class="star star-5" id="star-15" type="radio" name="Service"/>
                        <label class="star star-5" for="star-15"></label>
                        <input class="star star-4" id="star-14" type="radio" name="Service"/>
                        <label class="star star-4" for="star-14"></label>
                        <input class="star star-3" id="star-13" type="radio" name="Service"/>
                        <label class="star star-3" for="star-13"></label>
                        <input class="star star-2" id="star-12" type="radio" name="Service"/>
                        <label class="star star-2" for="star-12"></label>
                        <input class="star star-1" id="star-11" type="radio" name="Service"/>
                        <label class="star star-1" for="star-11"></label>
                </div>
            </div>
            <div class="rating-row">
                <p>Reception</p>
                <div class="rating-stars">
                        <input class="star star-5" id="star-20" type="radio" name="Reception"/>
                        <label class="star star-5" for="star-20"></label>
                        <input class="star star-4" id="star-19" type="radio" name="Reception"/>
                        <label class="star star-4" for="star-19"></label>
                        <input class="star star-3" id="star-18" type="radio" name="Reception"/>
                        <label class="star star-3" for="star-18"></label>
                        <input class="star star-2" id="star-17" type="radio" name="Reception"/>
                        <label class="star star-2" for="star-17"></label>
                        <input class="star star-1" id="star-16" type="radio" name="Reception"/>
                        <label class="star star-1" for="star-16"></label>
                </div>
            </div>
            <div class="rating-row">
                <p>Speed</p>
                <div class="rating-stars">
                        <input class="star star-5" id="star-25" type="radio" name="Speed"/>
                        <label class="star star-5" for="star-25"></label>
                        <input class="star star-4" id="star-24" type="radio" name="Speed"/>
                        <label class="star star-4" for="star-24"></label>
                        <input class="star star-3" id="star-23" type="radio" name="Speed"/>
                        <label class="star star-3" for="star-23"></label>
                        <input class="star star-2" id="star-22" type="radio" name="Speed"/>
                        <label class="star star-2" for="star-22"></label>
                        <input class="star star-1" id="star-21" type="radio" name="Speed"/>
                        <label class="star star-1" for="star-21"></label>
                </div>
            </div>
            <div class="rating-row">
                <p>Workers</p>
                <div class="rating-stars">
                        <input class="star star-5" id="star-30" type="radio" name="Workers"/>
                        <label class="star star-5" for="star-30"></label>
                        <input class="star star-4" id="star-29" type="radio" name="Workers"/>
                        <label class="star star-4" for="star-29"></label>
                        <input class="star star-3" id="star-28" type="radio" name="Workers"/>
                        <label class="star star-3" for="star-28"></label>
                        <input class="star star-2" id="star-27" type="radio" name="Workers"/>
                        <label class="star star-2" for="star-27"></label>
                        <input class="star star-1" id="star-26" type="radio" name="Workers"/>
                        <label class="star star-1" for="star-26"></label>
                </div>
            </div>
        </div>
        <br>
        <div class="form-item">
            <button type="submit" name="submit" id="submit">Send</button>
        </div>
      </form>
    </section>
</body>
</html>