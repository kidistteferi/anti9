

<div class="container">
@foreach($receiver as $index => $value) 

<div class="row">
     <div class="col">#
        </div>
        <div class="col">Question
        </div>
        <div class="col">Answer
        </div>
        
</div>
<hr>
<div class="row">
<div class="col">{{$index+1}}
        </div>
     <div class="col">corruption_type
        </div>
        <div class="col">{{$value->corruption_type}}
        </div>
        
</div>
<hr>
<div class="row">
<div class="col">{{$index+2}}
        </div>
     <div class="col">corruption_person_name
        </div>
        <div class="col">{{$value->corruption_person_name}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+3}}
        </div>
     <div class="col">corruption_conducted_Org
        </div>
        <div class="col">{{$value->corruption_conducted_Org}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+4}}
        </div>
     <div class="col">corruption_conducted_place
        </div>
        <div class="col">{{$value->corruption_conducted_place}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+5}}
        </div>
     <div class="col">beneficiary_person
        </div>
        <div class="col">{{$value->beneficiary_person}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+6}}
        </div>
     <div class="col">victim_person
        </div>
        <div class="col">{{$value->victim_person}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+7}}
        </div>
     <div class="col">damage_valued_bymoney
        </div>
        <div class="col">{{$value->damage_valued_bymoney}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+8}}
        </div>
     <div class="col">time
        </div>
        <div class="col">{{$value->time}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+9}}
        </div>
     <div class="col">paper
        </div>
        <div class="col">{{$value->paper}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+10}}
        </div>
     <div class="col">loan
        </div>
        <div class="col">{{$value->loan}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+11}}
        </div>
     <div class="col">tax
        </div>
        <div class="col">{{$value->tax}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+12}}
        </div>
     <div class="col">file
        </div>
        <div class="col">{{$value->file}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+13}}
        </div>
     <div class="col">audio
        </div>
        <div class="col">{{$value->audio}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+14}}
        </div>
     <div class="col">video
        </div>
        <div class="col">{{$value->video}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+15}}
        </div>
     <div class="col">image
        </div>
        <div class="col">{{$value->image}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+16}}
        </div>
     <div class="col">age
        </div>
        <div class="col">{{$value->age}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+17}}
        </div>
     <div class="col">tittle
        </div>
        <div class="col">{{$value->tittle}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+18}}
        </div>
     <div class="col">address
        </div>
        <div class="col">{{$value->address}}
        </div>
        
</div>

    <?php $ids=''; ?>
 
      <?php $ids=$value->c_id; ?>

  @endforeach
  </tbody>
</table>
   
            </div>
        

<div class="container">
<form action="{{ route('receiver.receiver.commentrec') }}" method="post">
     @csrf

     <input type="text" name="mid" value="<?php echo $ids;?>" hidden>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">comment of receiver</label>
  <textarea name="comment_rec" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="row">
  <div class="col">
    <input type="submit" class="btn btn-secondary" value="Accept" />
    
</div>
  
</div>

  </form>
 
</div>