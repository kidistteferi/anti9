

<div class="container">
@foreach($head as $index => $value) 
  
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
<!-- <hr><div class="row">
<div class="col">{{$index+1}}
        </div>
     <div class="col">corruption_type
        </div>
        <div class="col">{{$value->corruption_type}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+1}}
        </div>
     <div class="col">corruption_type
        </div>
        <div class="col">{{$value->corruption_type}}
        </div>
        
</div>
<hr> -->

<!-- @endforeach
    @if(isset($head))
    @if( !empty($head) && $head != 'empty')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
     
      <th scope="col">corruption_type</th>
      <th scope="col">corruption_person_name    </th>
      <th scope="col">corruption_conducted_Org  </th>
      <th scope="col">corruption_conducted_place</th>
      <th scope="col">beneficiary_person</th>
      <th scope="col">victim_person </th>
      <th scope="col">damage_valued_bymoney</th>
      <th scope="col">time </th>
      <th scope="col">paper  </th>
      <th scope="col">loan</th>
      <th scope="col">tax   </th>
      <th scope="col">file  </th>
      <th scope="col">audio </th>
      <th scope="col">video   </th>
      <th scope="col">image  </th>
      <th scope="col">age  </th>
      <th scope="col">tittle </th>
      <th scope="col">address</th>
    </tr>
  </thead>
  <tbody> -->
    <?php $ids=''; ?>
  <!-- @foreach($head as $index => $value) 
  
    <tr>
      <th scope="row">{{$index+1}}</th>
     
      <?php $ids=$value->id; ?>

      <?php $approve='Approve'; ?>
      <?php $reject='Reject'; ?>

      <td>{{$value->corruption_type}}</td>
      <td>{{$value->corruption_person_name}}</td>
      <td>{{$value->corruption_conducted_Org}}</td>
      <td>{{$value->corruption_conducted_place}}</td>
      <td>{{$value->beneficiary_person}}</td>
      <td>{{$value->victim_person}}</td>
      <td>{{$value->damage_valued_bymoney}}</td>
      <td>{{$value->time}}</td>
      <td>{{$value->paper}}</td>
      <td>{{$value->loan}}</td>
      <td>{{$value->tax}}</td>
      <td>{{$value->file}}</td>
      <td>{{$value->audio}}</td>
      <td>{{$value->image}}</td>
      <td>{{$value->age}}</td>
      <td>{{$value->tittle}}</td>
      <td>{{$value->address}}</td>

    
    </tr> -->
  @endforeach
  </tbody>
</table>
    @else
    <div class="alert alert-success">
       Wrong Complient Key!  Please use correct key!
    </div>
    @endif
    <br><br><br>
    <table class="table">
  <thead>
    <tr>
    
      <th scope="col">comment of receiver</th>
     
    </tr>
  </thead>
  <tbody>
   @if($result2)  
   @foreach($result2 as $index=>$value)
    <tr>
    <td>Receiver Comment :-</td>
      <td>{{$value->comment_rec}}</td>

      
</tr>


    @endforeach
    @endif
  </tbody>
</table>
    @endif
            </div>

<div class="container">
<form action="{{ route('head.head.comment') }}" method="post">
     @csrf

     <input type="text" name="mid" value="<?php echo $ids;?>" hidden>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">comment</label>
  <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="row">
  <div class="col">
    <input type="submit" class="btn btn-secondary" name='approve' value="<?php echo $approve;?>" />
    <input type="submit" class="btn btn-secondary" name='reject' value="<?php echo $reject;?>" />
    
</div>
  
</div>

  </form>
 
</div>