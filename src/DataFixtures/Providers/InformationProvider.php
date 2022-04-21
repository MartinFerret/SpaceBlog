<?php

namespace App\DataFixtures\Providers;

class InformationProvider
{
    private $title = [
        "Le rover curiosity célèbre une autre",
        "Bébés étoiles dans le ciel",
        "Le téléscope James Webb à bord",
        "restez à l'écoute pour Dart",
        "Hubble repère des tourbillons",
        "Découverte de certaines planètes"
];

    private $images = [
        "https://images.pexels.com/photos/220201/pexels-photo-220201.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500",
        "https://images.pexels.com/photos/796206/pexels-photo-796206.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500",
        "https://images.pexels.com/photos/2166/flight-sky-earth-space.jpg?auto=compress&cs=tinysrgb&dpr=2&w=500",
        "https://images.pexels.com/photos/23769/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&w=500",
        "https://images.pexels.com/photos/586073/pexels-photo-586073.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500",
        "https://images.pexels.com/photos/60126/pexels-photo-60126.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
    ];


    public function getRandomTitle ()
    {
        return $this->title[array_rand($this->title)];
    }

    public function text ()
    {
        return "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dictum nibh porttitor scelerisque ornare. Fusce et justo in odio convallis hendrerit. Sed dolor erat, dignissim sed laoreet eu, ornare at mi. Morbi vitae hendrerit mauris. Mauris eu nisi id lorem vestibulum porttitor nec et sapien. Proin elementum vulputate volutpat. Praesent venenatis elementum lectus, non dignissim orci cursus non. Cras ac venenatis enim. Ut ut sodales tellus. Ut eu tellus consectetur, consectetur massa vitae, lacinia sapien.

Morbi vel laoreet massa. Aliquam at tortor sed nulla rhoncus fringilla quis ut erat. In hac habitasse platea dictumst. Aliquam lacus ligula, bibendum vitae auctor in, vulputate non diam. Vivamus dui dui, auctor a ornare quis, dignissim sit amet augue. Vivamus vitae nibh risus. Pellentesque sagittis semper tortor eget vulputate. Suspendisse potenti. Nunc ornare in augue sed euismod.

Praesent mattis tempor tellus quis malesuada. Aenean non neque ullamcorper, vestibulum velit non, gravida quam. Vivamus nec arcu vitae est accumsan bibendum vitae ac justo. Phasellus erat tortor, lacinia vel arcu eleifend, venenatis cursus justo. Cras vitae nisl risus. Cras id tincidunt nisl. Donec velit metus, eleifend sit amet risus id, ullamcorper eleifend magna. Cras eu dolor ac mi bibendum pretium fermentum id risus. Vivamus mauris enim, faucibus vitae lacus sed, rutrum finibus metus. Donec in orci malesuada, luctus neque suscipit, lacinia leo. Cras non purus lacus. Suspendisse faucibus interdum maximus. In commodo tincidunt sapien sit amet lobortis. Suspendisse lacinia, mi vitae cursus condimentum, erat quam posuere velit, ut accumsan justo arcu et quam. Quisque dapibus rhoncus metus, in mattis diam rutrum vel.

Fusce est dui, laoreet sed est eget, commodo sodales metus. Vivamus vitae consectetur lacus. Ut sed ultrices magna. Ut aliquam tellus et augue vulputate, ac placerat urna volutpat. Aliquam ac arcu in justo porta maximus. Aenean ut risus urna. Phasellus vitae dui lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam luctus convallis augue ut imperdiet. Curabitur non sapien sit amet dolor dignissim finibus ut pulvinar odio. Nulla a velit eu lacus tincidunt hendrerit sit amet id risus. Sed tincidunt sit amet lorem in laoreet. Cras laoreet eget urna sit amet viverra.

Vestibulum sit amet ligula turpis. Vestibulum malesuada augue sit amet velit blandit, eget dignissim felis consectetur. Vestibulum nec diam scelerisque, euismod enim vitae, mattis quam. Proin varius a magna a ultricies. Donec volutpat maximus odio ut euismod. Cras id lorem a ligula gravida laoreet quis vitae arcu. Phasellus venenatis, felis et aliquam maximus, lorem lacus accumsan dolor, sed luctus odio dui ut lectus. Suspendisse potenti. Nulla blandit mauris quis dapibus rutrum. In sit amet est erat. Pellentesque massa erat, gravida eget maximus tristique, fermentum volutpat enim. Proin elementum porttitor odio a viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque rutrum suscipit urna. Donec sit amet velit leo. Phasellus vestibulum neque sed erat iaculis, in convallis risus rhoncus.

Morbi enim lectus, accumsan interdum nulla in, vehicula molestie ligula. Suspendisse dolor libero, pellentesque in bibendum non, tincidunt vitae leo. Nullam magna diam, blandit ut enim eu, viverra venenatis sem. Nam gravida dolor sit amet convallis auctor. Maecenas convallis sem at odio auctor, vitae eleifend tortor blandit. Pellentesque libero ipsum, sagittis lacinia bibendum ac, dictum at leo. Sed sit amet lectus tincidunt metus aliquam vestibulum. Sed quis aliquet enim, ut dictum felis. Quisque et porta eros. Praesent metus eros, aliquam a hendrerit sit amet, rhoncus eget odio. Nullam fermentum posuere leo id pulvinar.

Cras quis finibus diam. Quisque auctor, odio et laoreet rutrum, turpis nisi suscipit ante, et tincidunt diam tortor at urna. Etiam felis odio, dictum sit amet venenatis eget, sagittis in tortor. Aenean lacinia scelerisque rutrum. Aliquam in mollis sapien. Proin eu tellus et neque ornare varius. Nulla ac ligula posuere, mattis nulla ac, elementum lorem.

Pellentesque lacinia egestas neque ut venenatis. Nunc commodo est vel nibh rhoncus dapibus. Aliquam elementum arcu at massa faucibus malesuada eget eu ligula. Ut at gravida sapien. Praesent vitae pretium mi. Nulla lacinia metus a felis ullamcorper, eu auctor leo dictum. Pellentesque laoreet ultrices elit ut pellentesque. Fusce non scelerisque nibh. Sed varius justo at porta luctus. Nunc non tortor consectetur, pharetra nisi in, consequat lectus. Vivamus eget lorem aliquam, sodales ex vitae, tincidunt nulla. Suspendisse consequat lacus rutrum elit maximus, id efficitur lorem scelerisque. Nullam fermentum tellus id magna sagittis bibendum.

Nam accumsan quam quis nibh consequat, ut viverra eros sodales. Integer ut nulla ultrices, viverra lorem nec, placerat felis. Nunc ipsum ligula, vulputate quis enim sit amet, rhoncus efficitur ipsum. Donec vel dictum arcu, ac varius nisi. Nunc venenatis rutrum purus a cursus. Nunc iaculis semper turpis. Duis a malesuada nisi. Aenean pulvinar sagittis ex, ut semper velit placerat ac. In nec euismod justo, quis condimentum tellus. Ut a odio sed justo commodo laoreet.

Donec mollis justo est, quis maximus ante varius et. In sit amet consequat leo. Sed diam odio, viverra nec enim sed, placerat faucibus sem. Vestibulum feugiat nunc nec risus condimentum malesuada. Pellentesque egestas elit vitae odio maximus tincidunt. Aenean sed interdum ligula. Fusce elementum aliquam neque et interdum. Vestibulum eu sollicitudin lorem. Integer eget lectus ac ex fermentum bibendum. Duis suscipit, neque nec sodales ultrices, nunc quam imperdiet dolor, imperdiet posuere leo erat non elit. Fusce ac turpis sed magna blandit viverra sed nec est. Maecenas vitae ipsum molestie, consequat erat finibus, consequat odio. Nulla volutpat, tellus at volutpat aliquam, turpis ipsum auctor mi, eu feugiat enim lectus eget magna. Mauris mollis, dui a venenatis tincidunt, massa ligula elementum urna, at sodales tortor sem at nisi. Integer eget pretium lorem. Aenean mattis enim posuere nisi porttitor, ac tempor urna venenatis.

Donec consequat convallis efficitur. Integer imperdiet tempus lacus, et auctor dui efficitur vitae. Suspendisse eget quam porta, dignissim neque ut, eleifend velit. Proin a metus sit amet turpis finibus porttitor eu in nunc. Donec hendrerit erat id scelerisque varius. Praesent convallis lorem at dolor ultrices, quis vehicula quam iaculis. Sed sem urna, faucibus quis tincidunt sit amet, lacinia eu elit. Fusce ut pellentesque nisi. Donec mollis nulla id nulla posuere, a blandit dolor posuere.";
    }

    public function getImage()
    {
        return $this->images[array_rand($this->images)];
    }

}