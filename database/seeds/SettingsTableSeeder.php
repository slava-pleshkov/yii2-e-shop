<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = new Setting();
        $setting->delivery = 'on orders over $ 199';
        $setting->tel = '999 4567 8902';
        $setting->map = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.248000703498!2d151.265683!3d-33.7832959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12abc7edcbeb07%3A0x5017d681632bfc0!2sManly+Vale+NSW+2093%2C+Australia!5e0!3m2!1sen!2sin!4v1433329298259" style="border:0"></iframe>';
        $setting->email = 'mail@eshop.com';
        $setting->policytermsandconditions = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dolor ante, ornare vitae sapien nec, vulputate molestie ante. Proin dictum egestas dolor, id tristique justo sollicitudin vitae. Nunc dictum consequat ultricies. Quisque et ex lobortis, ornare odio a, dignissim nibh. Sed vel nunc ligula. Etiam auctor nisi et velit tristique efficitur. Nullam venenatis, orci eu tincidunt sodales, risus orci tincidunt nulla, vitae facilisis lacus dui at nulla. Aliquam a massa nec justo volutpat dignissim quis lacinia eros. Praesent ornare enim nibh, non dignissim ligula pellentesque ultrices. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In dignissim efficitur malesuada. Sed ut fermentum augue. Vestibulum pharetra eros eu lacinia egestas. Sed sodales, justo at interdum placerat, orci leo hendrerit turpis, in dignissim leo lorem id augue. Integer sagittis dolor sem. Donec commodo efficitur velit sit amet lacinia. Duis ligula turpis, bibendum in auctor ac, eleifend id neque. Praesent varius facilisis purus non aliquam. Aliquam viverra tellus quis nisl semper fermentum. Fusce fermentum nulla non tellus faucibus, ac posuere lacus pretium. Sed tristique metus vitae augue rhoncus, a feugiat lacus condimentum. In eget risus venenatis, sollicitudin enim non, semper enim. Ut tincidunt felis tellus, eget viverra urna egestas in. Ut vitae mauris eget elit bibendum convallis. Nam a justo ex. Praesent fringilla consectetur lectus, sit amet ultricies sem euismod nec. Sed varius arcu efficitur mauris sagittis, id maximus lectus posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin ex libero, tempus vehicula tincidunt ut, tempus ultrices turpis. Duis suscipit lectus vitae purus hendrerit, non sagittis dui commodo. Quisque in diam tortor. Proin porta tortor non quam scelerisque, a blandit urna imperdiet. Mauris et malesuada ante. Praesent vestibulum rhoncus blandit. Fusce venenatis, massa quis aliquet eleifend, diam ante cursus orci, in gravida dui ipsum a nisi. Suspendisse lobortis pretium neque, dapibus fringilla odio hendrerit et. Nunc malesuada leo a aliquet placerat. Nunc vulputate, ligula at ultrices imperdiet, dolor est varius dolor, a suscipit elit lacus eget nunc. Pellentesque hendrerit consectetur rhoncus. Phasellus commodo arcu nulla, sed ullamcorper enim porta vel. Curabitur lacinia ultrices pretium. Aliquam cursus fermentum sem, ut pretium tortor sollicitudin vel. Nunc quis magna et urna ultricies malesuada. Maecenas imperdiet sem id augue ullamcorper, id gravida purus dictum. Aenean auctor imperdiet nulla, eget ultricies libero porta quis. Suspendisse sagittis arcu at tempor interdum. Aliquam eget feugiat ipsum. Vestibulum ullamcorper pharetra eleifend. Integer gravida, augue a malesuada varius, metus leo rhoncus turpis, id imperdiet nisl tortor ut massa. Suspendisse vehicula interdum purus, non elementum tortor suscipit et. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla efficitur felis vel scelerisque elementum. Sed vel augue lacinia, iaculis orci vitae, porttitor nunc. Ut et dui quam. Nam eu risus id metus dapibus lobortis non vitae diam. Aliquam in tortor augue. Donec facilisis porttitor tortor id bibendum. Integer ut nunc at mauris facilisis sodales tristique imperdiet ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed eu est facilisis libero pretium egestas. Morbi dolor massa, lobortis et vehicula et, faucibus vitae tortor. Vestibulum suscipit augue eget dolor sollicitudin malesuada. Cras efficitur sagittis egestas. Donec sed lacus pharetra, lacinia felis eu, maximus lacus. Nam fermentum pulvinar nulla eu ultrices. Vivamus bibendum, velit mattis consequat fermentum, lacus est hendrerit dolor, porttitor vehicula dui odio quis ante. Nulla facilisi. Maecenas ut turpis et purus varius elementum a sagittis velit. Donec id pellentesque felis. Donec dictum tellus eget dignissim elementum. Donec pellentesque libero non purus dictum, eu aliquet elit pharetra. Etiam elit velit, auctor ac sollicitudin at, porttitor eget nulla. Aliquam gravida enim erat, a fringilla lacus ultricies eget. Pellentesque rhoncus augue id lobortis posuere. Nam laoreet dui id felis aliquam efficitur. Donec venenatis sagittis pulvinar. Donec nec diam felis. Aliquam erat volutpat. Vestibulum eleifend nunc diam, eu convallis massa congue in. Vivamus ut felis id neque gravida porttitor. Mauris dapibus, lectus vel porttitor consequat, felis quam ultricies orci, non faucibus ligula mauris in sem. Vivamus fringilla fermentum ante, ac molestie ex ultrices ut. Nunc posuere ultrices risus, ut fringilla magna elementum vel. Integer id quam vulputate, imperdiet erat ut, vestibulum lectus. Fusce eu tincidunt turpis, et tempus risus. Quisque luctus at nunc vitae condimentum. Suspendisse ut luctus neque, pretium pharetra nulla. Sed maximus facilisis gravida. Donec commodo quis nisi nec dapibus. Nunc enim massa, feugiat nec tristique ac, vehicula imperdiet erat. Donec placerat sed est et dictum. Donec eget turpis nibh. Ut vehicula tempus leo mollis tristique. Proin in libero vitae arcu vehicula eleifend quis fermentum lorem. Nam nec turpis leo. Proin ornare consequat turpis. Nunc quam metus, ultrices feugiat metus ac, varius posuere lacus. Donec posuere leo et eleifend lacinia. Fusce nec lectus id purus aliquet elementum et eget nunc. Cras bibendum, lorem et iaculis dapibus, metus diam fermentum nunc, at porttitor justo leo vitae turpis. In ante turpis, pretium at dolor et, mollis viverra massa. Morbi sodales lorem ut commodo commodo. Aenean bibendum bibendum nunc id facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis facilisis ipsum vel lectus blandit, vel fringilla est blandit. Aliquam et lacinia nulla, varius condimentum tortor. Aliquam lacus urna, malesuada quis ornare ac, lacinia ut ipsum. Praesent tempus, diam quis facilisis egestas, urna sem varius dui, a rutrum sem libero ut ligula. Nulla facilisi. Phasellus rhoncus lectus sed semper blandit. Curabitur ac posuere urna. Suspendisse non semper neque, vulputate malesuada lectus. Integer condimentum turpis ac mauris vehicula commodo at eu enim. Donec lobortis odio mauris, sed volutpat leo egestas nec. Integer nec ullamcorper ipsum, non sagittis lorem. Etiam bibendum, elit quis blandit lacinia, ex leo dignissim mi, a efficitur urna neque vitae est. Sed sit amet molestie eros. Nulla pulvinar nisi et neque sollicitudin bibendum id ut dolor. Mauris et lacus id dui ultrices commodo sed sit amet augue. Aenean mattis arcu non sagittis aliquet. Cras imperdiet pretium sapien eu porta. Integer finibus tortor ut porta blandit. Aenean a nunc augue. Ut ut mattis sapien, id pharetra est. Nam convallis feugiat sollicitudin. Aliquam erat volutpat. Sed vel pulvinar massa. Vivamus tempor nibh dui, ac elementum metus dignissim a. Cras sagittis placerat euismod. Integer blandit faucibus neque, eu suscipit tellus dignissim eu. Suspendisse potenti. Proin gravida porttitor ex. Mauris non euismod enim. Nunc vulputate urna non molestie pretium. Mauris facilisis ipsum ut libero consectetur placerat. Sed tellus diam, aliquet nec auctor quis, volutpat sit amet sem. Fusce eu tellus euismod, imperdiet dolor blandit, elementum eros. In ornare quam tellus, pharetra fermentum magna tincidunt dignissim. Phasellus dapibus imperdiet libero tristique congue. Nulla facilisi. Praesent gravida, sem sed rhoncus posuere, magna nisl maximus velit, nec dapibus libero dui sit amet dui. Mauris nec congue ligula. Morbi non faucibus metus. Ut tellus nisi, hendrerit et tincidunt quis, condimentum eu leo. Nam pharetra ultricies massa, quis tristique orci porttitor eu. Ut tempor purus vitae sem tristique, vel feugiat leo semper. Morbi eu volutpat eros, ut lobortis libero. Donec bibendum massa in gravida dignissim. Nunc tincidunt feugiat sapien, ac malesuada nulla fringilla quis. Mauris efficitur nunc dui, aliquet volutpat nibh mollis quis. Nullam consectetur, velit pharetra mollis pellentesque, sapien orci laoreet felis, ut vulputate erat magna in metus. Nullam in mollis nibh. Quisque rutrum leo et nibh vulputate ultrices. Nulla congue libero augue, interdum hendrerit leo commodo nec. Nunc in metus eu diam ultricies accumsan nec in leo. Quisque rhoncus mauris nisi, eget fermentum velit tempus nec. Mauris condimentum enim nisi, ut scelerisque orci porta vel. Pellentesque pellentesque tortor a felis blandit dapibus quis non turpis. Nunc vitae iaculis leo. Morbi consequat, ante at auctor ultrices, risus arcu convallis enim, vel ullamcorper quam elit quis erat. Nulla malesuada dignissim nunc vel ultrices. Pellentesque blandit nunc quam, vel vulputate ex viverra placerat. Aliquam elit urna, tristique eu sem vel, tempor sollicitudin diam. Sed ac feugiat neque. Vivamus luctus convallis egestas. Mauris quis dui rutrum eros elementum gravida vitae nec lacus. Donec sed bibendum ante. Praesent ut augue suscipit, mollis purus nec, luctus quam. Donec et pulvinar est. Suspendisse nulla ligula, hendrerit sed mi ut, fringilla pulvinar est. Vivamus a dui et libero tristique aliquet. Vivamus pellentesque sagittis tristique. Ut eu ligula dolor. Integer ac vehicula metus. Morbi ornare quam vel leo faucibus luctus. Etiam at ultrices mi. Vestibulum sit amet augue vestibulum, dapibus leo id, vehicula justo. Nam nec suscipit diam, non volutpat metus. Pellentesque metus ex, rutrum et commodo nec, pretium eu odio. Fusce nec viverra ante, vel dapibus est. Ut ac pharetra tellus, sed maximus nunc. Phasellus egestas fermentum diam, ut feugiat justo sodales et. Vivamus pulvinar nec dolor ac fermentum. Sed congue turpis mi, sit amet fermentum erat luctus nec. Suspendisse blandit quam augue, eu lobortis lorem gravida nec.';
        $setting->save();
    }
}
