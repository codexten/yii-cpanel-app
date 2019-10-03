# Yii cpanel app
Yii starter app with admin panel for yii 2.0 or higher

Resources
---------

  * [Documentation](https://github.com/codexten/docs/tree/master/yii-cpanel-app)
  * [Report issues](https://github.com/codexten/yii-cpanel-app/issues)

cpanel 1.x to 2.x upgrading changes

```shell script
sudo chown -R $USER:$USER /en /projects /instances ~/projects ~/.composer ~/.ssh ~/cpanel 
sudo chmod -R 777 /projects/docker/cpanel/mysql
sudo chown -R $USER:$USER /etc/hosts && ln -s /etc/hosts ~/Desktop/hosts.txt

```