@foreach ($posts as  $post)

<div class="col">
    <div class="card shadow">
      <img class="bd-placeholder-img card-img-top" width="100%" height="200" src="{{asset("img/logo.png")}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
      <div class="card-body">
        <div class="card-content">
            <div class="media">
              <div class="media-left">

                <h3 class="title is-4">{{$post->title}}</h3>


              </div>
              <div class="media-right">
                <span class="tag is-success is-light">
                    @if ($post->worf)
                        Aranıyor
                     @else
                        Bulundu
                    @endif
                </span>

              </div>
              <div class="media-content">
                <div class="media-right float-end">
                    <a class="" ><img src="{{asset("img/icons/icons8-more-details-48.png")}}" alt="" width="30"></a>
                </div>

              </div>
            </div>

            <div class="content">
                <span class="d-inline-block text-truncate" style="max-width: 300px;">
                    {{$post->description }} ...
                  </span>


              <br>
              <br>
              <div class="container border rounded" id="mapCont" >
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3029.1511812148774!2d49.663058215030325!3d40.604487979343624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403096890e23f225%3A0x4fa33033b486a8d!2zIlNpbXVycSIgxZ9hZGzEsXEgc2FyYXnEsQ!5e0!3m2!1sen!2saz!4v1681236100372!5m2!1sen!2saz" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="media-end mt-1">

                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>


                </div>
            </div>
          </div>
      </div>
    </div>
  </div>
@endforeach


<style>
    #mapCont{

    }
    #map{
        max-width:100%;
        max-height:100%;
    }
</style>
