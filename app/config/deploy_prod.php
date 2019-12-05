<?php

use EasyCorp\Bundle\EasyDeployBundle\Deployer\DefaultDeployer;

return new class extends DefaultDeployer
{
    public function configure()
    {
        return $this->getConfigBuilder()
            // SSH connection string to connect to the remote server (format: user@host-or-IP:port-number)
            ->server('www@payment.eternity-access.com')
            // the absolute path of the remote server directory where the project is deployed
            ->deployDir('/home/www/sfproject/sf3GrcEternity')
            // the URL of the Git repository where the project code is hosted
            ->repositoryUrl('git@gitlab.gibmedia.fr:edition/sf3GRCEternity.git')
            // the repository branch to deploy
            ->repositoryBranch('prod')
            ->sharedFilesAndDirs(['app/config/parameters.yml','var/logs'])
            ->installWebAssets(false)
        ;
    }

    // run some local or remote commands before the deployment is started
    public function beforeStartingDeploy()
    {
        // $this->runLocal('./vendor/bin/simple-phpunit');
    }

    // run some local or remote commands after the deployment is finished
    public function beforeFinishingDeploy()
    {
         //$this->runRemote('cp /home/www/sfproject/tools/.bowerrc .');
         //$this->runRemote('npm install ');
         //$this->runRemote('bower install');
        $this->runRemote('{{ console_bin }} assets:install --symlink --env=prod');
       // $this->runRemote('gulp build');
        // $this->runLocal('say "The deployment has finished."');
    }

    public function beforeCancelingDeploy(){
        die;
    }
};
