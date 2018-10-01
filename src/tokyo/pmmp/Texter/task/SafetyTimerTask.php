<?php

/**
 * // English
 *
 * Texter, the display FloatingTextPerticle plugin for PocketMine-MP
 * Copyright (c) 2018 yuko fuyutsuki < https://github.com/fuyutsuki >
 *
 * This software is distributed under "MIT license".
 * You should have received a copy of the MIT license
 * along with this program.  If not, see
 * < https://opensource.org/licenses/mit-license >.
 *
 * ---------------------------------------------------------------------
 * // 日本語
 *
 * TexterはPocketMine-MP向けのFloatingTextPerticleを表示するプラグインです
 * Copyright (c) 2018 yuko fuyutsuki < https://github.com/fuyutsuki >
 *
 * このソフトウェアは"MITライセンス"下で配布されています。
 * あなたはこのプログラムと共にMITライセンスのコピーを受け取ったはずです。
 * 受け取っていない場合、下記のURLからご覧ください。
 * < https://opensource.org/licenses/mit-license >
 */

declare(strict_types = 1);

namespace tokyo\pmmp\Texter\task;

use pocketmine\scheduler\Task;
use tokyo\pmmp\Texter\command\TxtAdmCommand;

/**
 * Class SafetyTimerTask
 * @package tokyo\pmmp\Texter\task
 */
class SafetyTimerTask extends Task {

  /** @var TxtAdmCommand */
  private $txtAdm;

  public function __construct(TxtAdmCommand $txtAdm) {
    $this->txtAdm = $txtAdm;
  }

  public function onRun(int $currentTick) {
    $this->txtAdm->reLockSafety();
  }
}