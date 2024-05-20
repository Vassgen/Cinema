function load_videos(){
    $.ajax({
        url:'http://172.17.5.251:22/cimena/api/get_filme.php',
        method:"get",
        dataType:"json",
        success: function(data){
            data['videos'].forEach(function(video){
                let div = $('<div>')
                div.append('<h3>'+video['title']+"</h3>")
                $('#videos').append(div)
            })
        }
    })
}