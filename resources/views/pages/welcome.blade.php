@extends('main')

@section('pageheader', '<h1 class="text-right"><small>SUPER COOL AND AWESOME</small>PLATFORM FOR <small>SUPER COOL AND AWESOME </small>IDEAS</h1>')

@section('content')


    
    <!-- ROW -->
    <div class="row">
    <!-- Starred ideas from INNOVATION WIZARDS -->

    

        <div class="col-md-6">
    
            <h1>Starred SCAAI's</h1>
            <p>
            <div class="post">
                <h3>SCAAI</h3>
                <p><i>category:</i> <a href="#"><b>innovations</b></a></p>
                <p><i>from:</i> <a href="#"><b>Spede</b></a></p>
                <p> It would be awesome if somebody set me on fire with super some cool stuff aw yiss.</p>
            <a href="#" class="btn btn-primary">Read more</a>
            </div>
            
    
            <hr>
        </div>
    
    <!-- END OF STARRED IDEAS -->


    <!-- RECENT IDEAS -->    
        <div class="col-md-6">
    
            <h1>Recent SCAAI's</h1>
            <p>
            <div class="post">
            <h3>SCAAI</h3>
            <i>category:</i> <a href="#"><b>innovations</b></a>
            <i>from:</i> <a href="#"><b>Spede</b></a>
            <p> It would be awesome if somebody set me on fire with super some cool stuff aw yiss.</p>
            <a href="#" class="btn btn-primary">Read more</a>
        
        </div>
    
        <hr>
        
        <!-- END OF RECENT IDEAS -->
    
    
    </div>
    <!--End of Row -->

@endsection

