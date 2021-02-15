@extends('frontend.master')
@section('main')


<!-- @push('css')
<style>



fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 

</style> -->

<!-- @endpush -->


<div style="padding:100px 0">
<div class="container">
<h1>Tution Post</h1>

<div class="form-group">
<p>
        <label for="">Tutor Name:</label>{{$tutionview->tutor->name}}
        </p>

        <p>
        <label for="">Tutor Email:</label>{{$tutionview->tutor->email}}
        </p>

        <p>
        <label for="">Tutor Address:</label>{{$tutionview->tutor->address}}
        </p>
        <label for="">Tutor Mobile Number:</label>{{$tutionview->tutor->mobile_number}}
        </p>

       <p>
        <label for="">Subject Name:</label>{{$tutionview->subjectname->name}}
        </p>

        <p>
        <label for="">Group:</label>{{$tutionview->groupname->group}}
        </p>

        <p>
        <label for="">Class:</label>{{$tutionview->hasclass->class}}
        </p>
        <p>
        <label for="">Schedule:Day:</label>{{$tutionview->schedule_day}}
        </p>

        <p>
        <label for="">Schedule:Time:</label>{{$tutionview->schedule_time}}
        </p>

        <p>
        <label for="">Tution Fee:</label>{{$tutionview->tution_fee}}
        </p>

        <div class="card" style="width: 100%; margin:10px 0">
                <div class="card-body" style="background: #d8dce4;" >
                    <h2 class="card-title"style=" color: #0f6767">Comments</h2>
                   
                    
                           @foreach($tutionview->tutor->tutorR->comments as $key=>$comment)
                           
                           <p>Comments:{{$comment->comments}}</p>
                           
                           @endforeach
                    
                    
                </div>
          <div>
      </div>
        </div>


        <form  method="post" action="{{route('comments.submit')}}">
        @csrf
        <input type="hidden" value="{{$tutionview->id}}" name="tutor_id">
        <p>
        <h4>Comments</h4>
        <!-- <label for="textarea">Comments</label> -->
        <textarea name="comments" id="comments" class="form-control" placeholder="Enter Comments here" required></textarea>
        
        </p>
        <button type="submit" class="btn btn-primary">Submit</button>
        
         </form>
        <!-- <h1>Ratings</h1>
        
      <fieldset class="rating">
          <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
          <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
          <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
          <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
          <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
          <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
          <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
          <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
          <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
          <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
      </fieldset> -->

    </div>
    </div>


@stop

<!-- @push('js')

<script>

$('.star-input').click(function() {
  $(this).parent()[0].reset();
  var prevStars = $(this).prevAll();
  var nextStars = $(this).nextAll();
  prevStars.attr('checked',true);
  nextStars.attr('checked',false);
  $(this).attr('checked',true);
});

$('.star-input-label').on('mouseover',function() {
  var prevStars = $(this).prevAll();
  prevStars.addClass('hovered');
});
$('.star-input-label').on('mouseout',function(){
  var prevStars = $(this).prevAll();
  prevStars.removeClass('hovered');
})

</script>

@endpush -->