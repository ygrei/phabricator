<?php

abstract class PhabricatorProjectBoardController
  extends PhabricatorProjectController {

  public function buildIconNavView(PhabricatorProject $project) {
    $id = $project->getID();
    $nav = parent::buildIconNavView($project);
    $nav->selectFilter("board/{$id}/");
    return $nav;
  }
}
