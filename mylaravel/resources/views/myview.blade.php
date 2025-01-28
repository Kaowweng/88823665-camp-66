<h1>My Controller</h1>
<h1>myinput: {{ $myinput; }}</h1>
<h1>myvalue: <?php  echo $myvalue; ?></h1>
<form method="post"
      action="{{ url('/mycontroller') }}">
    @csrf
    <input type="text" name="myinput">
    <button type="submit">Submit</button>
</form>
