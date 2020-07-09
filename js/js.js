let vue=new Vue({
    el:'.container',
    data:{
        information:'',
        experience:'',
        portfolio:'',
        skillS:'',
        skill:'',
        jbcon:'',
        edu:'',
        intr:'',
        img:'',
        informationShow:true,
        experienceShow:true,
        portfolioShow:true,
        skillSShow:true,
        skillShow:true,
        jbconShow:false,
        eduShow:true,
        intrShow:true,
        imgShow:false,
        autoShow:true,
        t:'',
        scro:0,
    },
    methods:{
        min:function(){
            this.informationShow=true;
            this.experienceShow=true;
            this.portfolioShow=true;
            this.skillSShow=true;
            this.jbconShow=false;
            this.eduShow=true;
            this.intrShow=true;
            this.imgShow=false;
            this.autoShow=true;
            if(this.t!=''){
                clearInterval(this.t);
            }
            this.t = setInterval(()=>{
                if(Math.floor((document.querySelector('.main').scrollTop)/10) < Math.floor((document.querySelector('.information').offsetTop/10))){
                    document.querySelector('.main').scrollTop+=10;
                    if((document.querySelector('.main').scrollHeight-document.querySelector('.main').scrollTop)<=750){
                        clearInterval(this.t);
                    }
                }else if(Math.floor((document.querySelector('.main').scrollTop)/10) > Math.floor((document.querySelector('.information').offsetTop/10))){
                    document.querySelector('.main').scrollTop-=10;
                }else{
                    clearInterval(this.t);
                }
            },1)
            $('.menu-item').removeClass('__active');
            $('.in').parent('.menu-item').addClass('__active');
        },
        mex:function(){
            this.informationShow=true;
            this.experienceShow=true;
            this.portfolioShow=true;
            this.skillSShow=true;
            this.jbconShow=false;
            this.eduShow=true;
            this.intrShow=true;
            this.imgShow=false;
            this.autoShow=true;
            if(this.t!=''){
                clearInterval(this.t);
            }
            this.t = setInterval(()=>{
                if(Math.floor((document.querySelector('.main').scrollTop)/10) < Math.floor((document.querySelector('.exp').offsetTop/10))){
                    document.querySelector('.main').scrollTop+=10;
                    if((document.querySelector('.main').scrollHeight-document.querySelector('.main').scrollTop)<=750){
                        clearInterval(this.t);
                    }
                }else if(Math.floor((document.querySelector('.main').scrollTop)/10) > Math.floor((document.querySelector('.exp').offsetTop/10))){
                    document.querySelector('.main').scrollTop-=10;
                }else{
                    clearInterval(this.t);
                }
            },1)
            $('.menu-item').removeClass('__active');
            $('.ex').parent('.menu-item').addClass('__active');
        },
        msk:function(){
            this.informationShow=true;
            this.experienceShow=true;
            this.portfolioShow=true;
            this.skillSShow=true;
            this.jbconShow=false;
            this.eduShow=true;
            this.intrShow=true;
            this.imgShow=false;
            this.autoShow=true;
            if(this.t!=''){
                clearInterval(this.t);
            }
            this.t = setInterval(()=>{
                if(Math.floor((document.querySelector('.main').scrollTop)/10) < Math.floor((document.querySelector('.skills').offsetTop/10))){
                    document.querySelector('.main').scrollTop+=10;
                    if((document.querySelector('.main').scrollHeight-document.querySelector('.main').scrollTop)<=750){
                        clearInterval(this.t);
                    }
                }else if(Math.floor((document.querySelector('.main').scrollTop)/10) > Math.floor((document.querySelector('.skills').offsetTop/10))){
                    document.querySelector('.main').scrollTop-=10;
                }else{
                    clearInterval(this.t);
                }
            },1)
            $('.menu-item').removeClass('__active');
            $('.sk').parent('.menu-item').addClass('__active');
        },
        med:function(){
            this.informationShow=true;
            this.experienceShow=true;
            this.portfolioShow=true;
            this.skillSShow=true;
            this.jbconShow=false;
            this.eduShow=true;
            this.intrShow=true;
            this.imgShow=false;
            this.autoShow=true;
            if(this.t!=''){
                clearInterval(this.t);
            }
            this.t = setInterval(()=>{
                if(Math.floor((document.querySelector('.main').scrollTop)/10) < Math.floor((document.querySelector('.education').offsetTop/10))){
                    document.querySelector('.main').scrollTop+=10;
                    if((document.querySelector('.main').scrollHeight-document.querySelector('.main').scrollTop)<=750){
                        clearInterval(this.t);
                    }
                }else if(Math.floor((document.querySelector('.main').scrollTop)/10) > Math.floor((document.querySelector('.education').offsetTop/10))){
                    document.querySelector('.main').scrollTop-=10;
                }else{
                    clearInterval(this.t);
                }
            },1)
            $('.menu-item').removeClass('__active');
            $('.ed').parent('.menu-item').addClass('__active');
        },
        mpo:function(){
            this.informationShow=true;
            this.experienceShow=true;
            this.portfolioShow=true;
            this.skillSShow=true;
            this.jbconShow=false;
            this.eduShow=true;
            this.intrShow=true;
            this.imgShow=false;
            this.autoShow=true;
            if(this.t!=''){
                clearInterval(this.t);
            }
            this.t = setInterval(()=>{
                if(Math.floor((document.querySelector('.main').scrollTop)/10) < Math.floor((document.querySelector('.portfolio').offsetTop/10))){
                    document.querySelector('.main').scrollTop+=10;
                    if((document.querySelector('.main').scrollHeight-document.querySelector('.main').scrollTop)<=750){
                        clearInterval(this.t);
                    }
                }else if(Math.floor((document.querySelector('.main').scrollTop)/10) > Math.floor((document.querySelector('.portfolio').offsetTop/10))){
                    document.querySelector('.main').scrollTop-=10;
                }else{
                    clearInterval(this.t);
                }
            },1)
            $('.menu-item').removeClass('__active');
            $('.po').parent('.menu-item').addClass('__active');
        },
        mco:function(){
            this.informationShow=false;
            this.experienceShow=false;
            this.portfolioShow=false;
            this.skillSShow=false;
            this.jbconShow=true;
            this.eduShow=false;
            this.intrShow=false;
            this.imgShow=false;
            this.autoShow=false;
            if(this.t!=''){
                clearInterval(this.t);
            }
            $('.menu-item').removeClass('__active');
            $('.co').parent('.menu-item').addClass('__active');
        },
        mim:function(){
            this.informationShow=false;
            this.experienceShow=false;
            this.portfolioShow=false;
            this.skillSShow=false;
            this.jbconShow=false;
            this.eduShow=false;
            this.intrShow=false;
            this.imgShow=true;
            this.autoShow=false;
            if(this.t!=''){
                clearInterval(this.t);
            }
            $('.menu-item').removeClass('__active');
            $('.im').parent('.menu-item').addClass('__active');
        },
        mau:function(){
            this.informationShow=true;
            this.experienceShow=true;
            this.portfolioShow=true;
            this.skillSShow=true;
            this.jbconShow=false;
            this.eduShow=true;
            this.intrShow=true;
            this.imgShow=false;
            this.autoShow=true;
            if(this.t!=''){
                clearInterval(this.t);
            }
            if(this.t!=''){
                clearInterval(this.t);
            }
            this.t = setInterval(()=>{
                if(Math.floor((document.querySelector('.main').scrollTop)/10) < Math.floor((document.querySelector('.auto').offsetTop/10))){
                    document.querySelector('.main').scrollTop+=10;
                    if((document.querySelector('.main').scrollHeight-document.querySelector('.main').scrollTop)<=750){
                        clearInterval(this.t);
                    }
                }else if(Math.floor((document.querySelector('.main').scrollTop)/10) > Math.floor((document.querySelector('.auto').offsetTop/10))){
                    document.querySelector('.main').scrollTop-=10;
                }else{
                    clearInterval(this.t);
                }
            },1)
            $('.menu-item').removeClass('__active');
            $('.au').parent('.menu-item').addClass('__active');
        },
        mad:function(){
            window.location.href='backend/index.php';
        },
        getScro(){
            this.scro=document.querySelector('.main').scrollTop;
        },
    },
    watch:{
        scro:function(){
            if(this.scro-10<document.querySelector('.information').offsetTop){
                $('.menu-item').removeClass('__active');
                $('.in').parent('.menu-item').addClass('__active');
            }
            else if(this.scro-10<document.querySelector('.skills').offsetTop){
                $('.menu-item').removeClass('__active');
                $('.sk').parent('.menu-item').addClass('__active');
            }
            else if(this.scro-10<document.querySelector('.exp').offsetTop){
                $('.menu-item').removeClass('__active');
                $('.ex').parent('.menu-item').addClass('__active');
            }
            else if(this.scro-10<document.querySelector('.education').offsetTop){
                $('.menu-item').removeClass('__active');
                $('.ed').parent('.menu-item').addClass('__active');
            }
            else if(this.scro-10<document.querySelector('.portfolio').offsetTop){
                $('.menu-item').removeClass('__active');
                $('.po').parent('.menu-item').addClass('__active');
            }
            else if(this.scro-10<document.querySelector('.auto').offsetTop){
                $('.menu-item').removeClass('__active');
                $('.au').parent('.menu-item').addClass('__active');
            }
        }
    },
    beforeCreate: function(){
        fetch('api/intro.php',{method:'GET'}).then(res=>{
            return res.json();
        }).then(res=>{
            console.log(res)
            this.information=res.information;
            this.experience=res.experience;
            this.portfolio=res.portfolio;
            this.skillS=res.skillS;
            this.skill=res.skill;
            this.jbcon=res.jbcon;
            this.edu=res.edu;
            this.intr=res.intro;
        }).catch(error=>console.log(error));

        fetch('api/img.php?pic=1').then(res=>{
            return res.json();
        }).then(res=>{
            this.img=res;
        });
    },
});

