@extends('UserView.UserMaster.UserMaster')





@section('main')
    @include('UserView.Partial.navbarstatic')

    <div class="container-fluid">
        <nav aria-label="breadcrumb" >
            <ol class="breadcrumb mb-0" style="font-size: 18px">
                <li class="breadcrumb-item"><a href="{{route('user.view')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tips</li>
            </ol>
        </nav>
        <h1 class="text-dark" style="font-size: 50px"><strong>Dog Training For Dummies Cheat Sheet</strong></h1>
        <h4 class="text-dark" style="margin: 30px 0">Updated: 04-25-2022 | Author: Nguyen Trong Dat</h4>
        <div class="row">
            <div class="col-lg-2">
                <div id="list-example" class="list-group sticky-top" style="border: none" >
                    <h4 style="text-align: center">In this article</h4>
                    <a class="list-group-item list-group-item-action" href="#list-item-1">Introduction</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">The Do’s and Don’ts of Dog
                        Training</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Control Your Dog with the Sit
                        and Down Commands</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Use the Recall Game to Get
                        Your Dog to Come When Called</a>
                </div>
            </div>

            <div class="col-lg-7">
                <div data-spy="scroll" data-target="#list-example" data-offset="0">
                    <h3 id="list-item-1" class="text-dark">Introduction</h3>
                    <p style=" font-size: 17px;">Providing your dog with at least some training is the best and most
                        loving thing you can do for
                        him. Training your dog ensures that he’s safe and welcome everywhere he goes and that he’s easy
                        to live with. When beginning obedience training, you need to keep in mind a few do’s and don’ts,
                        and you should start with a few basic exercises, including sitting and laying down on command.
                        Training him to respond to the Come and Sit-Stay commands also is extremely helpful.
                    </p>
                    <img src="{{asset('/images/puppy_images/tips.jpg')}}" alt=""
                         style="height: 500px; width: 100%; margin-bottom: 30px">
                    <h3 id="list-item-2" class="text-dark">The Do’s and Don’ts of Dog Training</h3>
                    <p style=" font-size: 17px;">Yes, dog training is based on common sense. However, you do need to
                        keep in mind a few specific
                        guidelines — the do’s and don’ts — to make sure that you’re successful and fostering a healthy
                        relationship with your dog. The following sections are here to help get you</p>

                    <h3 class="text-dark">Do’s</h3>
                    <ul style=" font-size: 17px;">
                        <li>Do be nice to your dog every time he comes to you (even if he’s just coming back from an
                            unexpected romp around the neighborhood).
                        </li>
                        <li>Do get into the habit of giving a command only once. If your dog doesn’t respond to a
                            command
                            you already taught him, reinforce the command by helping him respond correctly.
                        </li>
                        <li>Do use your dog’s name to get his attention and then tell him what you want him to do.</li>
                        <li> Do eliminate the word “no” from your training vocabulary; it’s used too often and
                            meaningless.
                        </li>
                        <li> Do use a normal tone of voice when you give a command. Being loud doesn’t help him
                            understand.
                        </li>
                        <li> Do be consistent in your actions and expectations.</li>
                        <li>Do provide an outlet for your dog’s energies.</li>
                        <li> Do keep your dog mentally stimulated by training him.</li>
                        <li> Do understand that your dog is a social animal. Train him so he can be a part of the
                            family.
                        </li>
                        <li> Do socialize your dog with people and other dogs.</li>
                        <li>Do become your dog’s teacher.</li>
                        <li> Do make learning fun for your dog.</li>

                        <li>Do consistently reward with praise the correct behaviors.</li>
                        <li> Do spend plenty of time with your dog and give him lots of exercise.</li>
                        <li> Do keep trying, and your dog will reward you by learning.</li>
                        <li>Do get outside help if you get stuck.</li>
                    </ul>
                    <h3 class="text-dark">Don’ts</h3>
                    <ul style=" font-size: 17px;">
                        <li> Don’t do anything your dog perceives as unpleasant when he comes to you.</li>
                        <li>Don’t nag your dog by repeating commands; nagging teaches him to ignore you.</li>
                        <li>Don’t use your dog’s name and then expect him to read your mind as to what you want.</li>
                        <li>Don’t expect your dog to know what the word “no” means.</li>
                        <li> Don’t yell at your dog. He’s not deaf. Raising your voice doesn’t improve his
                            understanding.
                        </li>
                        <li> Don’t confuse your dog with unrealistic expectations.</li>
                        <li> Don’t try to suppress behaviors that need an outlet.</li>
                        <li> Don’t let your dog stagnate.</li>
                        <li>Don’t lock up your dog or put him out because you haven’t trained him to behave.</li>
                        <li> Don’t isolate your dog — he’s a social animal.</li>
                        <li> Don’t expect your dog to obey a command you haven’t taught him.</li>
                        <li>
                            Don’t get too serious in your training; keep things fun.
                        </li>
                        <li> Don’t reward undesired behaviors.</li>
                        <li>Don’t make your dog neurotic by neglecting him.</li>
                        <li> Don’t give up when the going gets tough; keep trying.</li>
                        <li>Don’t blame the dog; you are his teacher.</li>
                    </ul>
                    <h3 id="list-item-3" class="text-dark ">Control Your Dog with the Sit and Down Commands</h3>
                    <p style=" font-size: 17px;"> When you think of dog training or obedience, the first two commands
                        that probably pop into your
                        head are the Sit and the Down commands. These commands are essential to making a well-behaved
                        dog. Practice a 30-minute Down and a 10-minute Sit, on alternate days, for four weeks. See the
                        following sections for details. </p>

                    <div class="card">
                        <div class="row no-gutters align-items-center" style="text-align: center;">
                            <div class="col-md-4" style="height: 220px">
                                <img src="{{asset('/images/peca-04.png')}}" alt="" style="height: 100%">
                            </div>
                            <div class="col-md-8" style="background-color: #fcdc81; box-shadow: 10px 0px 5px 5px rgba(0, 0, 0, 0.25);">
                                <div class="card-body">
                                    <p class="card-text text-dark" style="font-size: 17px">When giving commands to your dog during
                                        training, be sure to give them in a calm, yet upbeat
                                        tone of voice. Don’t pose commands as questions; otherwise, Buddy won’t obey.
                                        And be sure to use
                                        only one command at a time and say it only once. If he doesn’t respond, show him
                                        exactly what
                                        you expect from him and then praising him for his success even though you
                                        helped.</p>

                                </div> <!-- end card-body-->
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                    </div>


                    <h3 id="list-item-3" class="text-dark ">Sit on command</h3>
                    <p style=" font-size: 17px;">The following steps show you one way of teaching your dog the Sit
                        command. Start off teaching
                        him to do so using a treat, and then you add the command. Here’s how to do it:</p>
                    <ol style="font-size: 17px">
                        <li>Hold the treat slightly in front of your dog’s head, say “Sit” and bring your hand slightly
                            above and over his eyes. Give him the treat when he sits.
                        </li>
                        <li>For the next attempt, use a treat in one hand, and apply some upward pressure on the collar
                            with
                            the other as you say “Sit.”
                            Give lots of praise when the dog sits.
                        </li>

                        <li>When he gets the hang of sitting, you can work on commanding him to sit; without touching
                            your
                            dog or showing him a treat, say “Sit.”
                            When he responds correctly, reward him with a treat. If he doesn’t respond correctly, review
                            Step 2.
                        </li>
                    </ol>
                    <h3 id="list-item-3" class="text-dark ">Down on command</h3>
                    <p style=" font-size: 17px;">When you’re ready to teach your dog the Down command, one way of
                        teaching him to lie down is
                        with a treat, and then you introduce pressure on his collar as you command. Here’s what to do:
                    </p>
                    <ol style=" font-size: 17px;">
                        <li>With your dog sitting at your left side, show him a treat, held in the right hand, say
                            “Down,”
                            and then lower the treat to the ground between his feet and slowly slide it forward so he
                            has to
                            lie down to get it.
                            When he’s in the Down position, give him the treat.
                        </li>
                        <li>For the next attempt, put the treat in your right hand, and then put your left hand through
                            his
                            collar under his chin and say “Down.”
                            Lower the treat and apply slight downward pressure toward the dog’s chest using the collar.
                            Give
                            your dog the treat and lots of praise when he lies down.
                        </li>
                        <li> When he’s familiar with the Down position, you’re ready to work on commanding him to lie
                            down.
                        </li>
                        <li> Without touching your dog or showing him a treat, say “Down.” When he responds correctly,
                            reward him with a treat. If he doesn’t respond correctly, review
                            Step 2.
                        </li>
                    </ol>
                    <h3 id="list-item-4" class="text-dark ">Use the Recall Game to Get Your Dog to Come When Called</h3>

                    <p style=" font-size: 17px;">If you’re interested in training your dog to come to you when he’s called, one way to teach him
                        is to play the Recall Game. This training game is played with two people, one hungry dog, a
                        6-foot leash, and plenty of small treats. Practice the Recall Game on and off leash inside, on
                        and off leash outside in a confined area, and then ultimately on and off leash with distractions
                        when your dog is ready. Be sure you can touch your dog’s collar every time he comes to you and
                        before you give him a treat. </p>

                    <p style=" font-size: 17px;">Here are the steps to follow when playing the Recall Game:</p>
                    <ol style=" font-size: 17px;">
                        <li>Find a partner and sit on the floor 6 feet apart, facing each other, and ask your partner to
                            gently restrain the dog while you hold the handle of the leash.
                        </li>
                        <li>Call your dog by saying “Buddy, Come,” and use the leash to guide him to you as your partner
                            lets go of him.
                        </li>
                        <li>When Buddy comes to you, put your finger through his collar, give him a treat, and praise
                            him
                            enthusiastically.
                        </li>
                        <li>Hold onto Buddy’s collar and pass the handle of the leash to your partner, who says, “Buddy,
                            Come,” guides the dog in, puts his finger through the collar, gives him a treat, and praises
                            the
                            dog.
                        </li>
                    </ol>
                    <p style=" font-size: 17px; margin-bottom: 60px"> Work through these steps until your dog responds on his own to being called and no longer needs
                        to be guided to you with the leash. At that point, you can start increasing the distance between
                        you and your partner (up to 12 feet). You also can begin playing the game from room to room in
                        your house. Make sure Buddy responds well inside before you take him outside. Each time you
                        change location, start the Recall Game on leash — get the correct response before taking the
                        leash off. If Buddy doesn’t respond, go back and put him on leash.</p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card text-center sticky-top" style="width: 18rem; ">
                    <div class="card-body">
                        <h3 class="card-title">Discover puppy</h3>
                        <p class="card-text" style="font-size: 17px">Finding adorable puppy in PECA</p>
                        <img src="{{asset('/images/puppy_images/max.jpg')}}" alt="" style="width:250px; margin-bottom: 15px" >
                        <a href="{{route('user.view')}}" class="btn btn-primary " style="border-radius: 15px">Visit website</a>
                    </div>
                </div>
            </div>
        </div>
    </div
    @include('UserView.Partial.footer')
@endsection
