<h1>Insert New apartment for sale</h1>
<form action ="{{ route('estate.create') }}" method ="POST">
    @csrf
    <input type="text" name="outlook">
      <div class="form-group">
        <label>outlook</label>
        <input type="hidden" name="outlook" >
        <select name="outlook" class="form-control select">
          <option value="inner">Inner</option>
          <option value="school">School</option>
          <option value="school">mosque</option>
          <option value="school">publicRoad</option>
          {{-- <option value="{{$outlook->id}}">{{$outlook[1]}}</option>
          <option value="{{$outlook->id}}">{{$outlook[2]}}</option>
          <option value="{{$outlook->id}}">{{$outlook[3]}}</option> --}}
        </select>
      </div>
        