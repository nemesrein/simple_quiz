(function(){
    var model = {
        subjects:0,
        topics:'',
        get_Subjects:function(){
            $.ajax({
                url:'subject.php',
                method:'post',
                data:{get_subject:123},
                dataType:'json',
                success:function(data){
                    model.subjects = data
                    controller.show_subjects();
                }
            })
        },
        get_Topics:function(datas){
            $.ajax({
                url:'subject.php',
                method:'post',
                data:{cb_topics:123,datas:datas},
                dataType:'json',
                success:function(data){
                    console.log(data)
                }
            })
        }
    }
    var controller = {
        init:function(){
            model.get_Subjects()
            view.bind_events()
        },
        show_subjects:function(){
            var data = model.subjects;
            view.render_subjects(data)
        },
        assign_topics:function(data){
            model.topics = data;
            console.log(model.topics)
        },
        set_topics:function(){
            model.get_Topics(model.topics)
        }
    }
    var view = {
        render_subjects:function(data){
            console.log(data)
            var temp='';
            for(i in data){                                           
                temp+=`<input type='checkbox' class='test' name='subject' value='${data[i].data[0].Topic_id}'>${data[i].SubjectCode}${i} `
            }
            $(".subjects").html(`<form>${temp}</form>`)
        },
        send_checkbox:function(){
            var  datas = [];
            $.each($("input[name='subject']:checked"),function(){
                if($(this).val() > 0 ){
                    datas.push($(this).val());
                }
            })
            controller.assign_topics(datas)
        },
        bind_events:function(){
            $(document).on("click","input[name='subject']",this.send_checkbox.bind(this));
        }
    }
    controller.init()
}())