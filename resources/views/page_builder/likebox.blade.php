<div class='fb-page'
     data-href='https://www.facebook.com/{{ $fields['page'] ?? 'statamic' }}'
     data-width='{{ $fields['width'] ?? 240 }}'
     @if(! empty($fields['height']))
        data-height='{{ $fields['height'] }}'
     @endif
     data-tabs='{{ $fields['content_tabs'] ?? 'timeline' }}'
     data-hide-cover='{{ $fields['hide_header_cover'] ?? 'false' }}'
     data-small-header='{{ $fields['compact_header'] ?? 'false' }}'></div>
<div id='fb-root'></div>
<script>
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = '//connect.facebook.net/{{ $fields['page'] ?? 'en_US' }}/all.js#xfbml=1&appId=';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>