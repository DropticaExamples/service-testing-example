import os
import time
from docker_console.web.engines.drupal7.tests import Tests
from docker_console.utils.console import run as run_cmd, message



def docker_codecept(self, cmd='', link_selenium=True):
    link_selenium_chrome_name = ''
    link_selenium_ff_name = ''
    if link_selenium:
        run_cmd('docker run -d --name selenium-test-chrome-%s %s %s %s'
                % (self.docker.base_alias, self.docker._get_links(), self.docker._get_hosts(), self.config.TESTS['IMAGES']['selenium_chrome_image'][0]))
        link_selenium_chrome_name = '--link selenium-test-chrome-%s:selenium_ch' % self.docker.base_alias
        print "Waitng 5 sec."
        time.sleep(5)
        run_cmd('docker run -d --name selenium-test-ff-%s %s %s %s'
                % (self.docker.base_alias, self.docker._get_links(), self.docker._get_hosts(), self.config.TESTS['IMAGES']['selenium_ff_image'][0]))
        link_selenium_ff_name = '--link selenium-test-ff-%s:selenium_ff' % self.docker.base_alias
        print "Waitng 5 sec."
        time.sleep(5)
    run_cmd('docker run --rm %s %s %s %s %s -w %s %s codecept %s'
        % (self.docker._get_volumes(), self.docker._get_links(), self.docker._get_hosts(),
           link_selenium_chrome_name, link_selenium_ff_name, os.path.join('/app', self.config.TESTS['LOCATION']), self.config.TESTS['IMAGES']['codecept_image'][0], cmd))

def tests_run(self):
    if ('selenium_chrome_image' not in self.config.TESTS['IMAGES']) or (
        'selenium_ff_image' not in self.config.TESTS['IMAGES']) or (
        'codecept_image' not in self.config.TESTS['IMAGES']):
        message('selenium_chrome_image or selenium_ff_image or codecept_image is missing in TESTS config.', 'error')
        exit(0)
    if len(self.config.args) > 2:
        args = 'tests/' + ' '.join(self.config.args[2:])
    else:
        args = ''
    self.docker_codecept('build', False)
    self.docker_codecept('clean', False)
    self.docker_codecept('run %s --html --xml' % args)
    run_cmd('docker stop selenium-test-chrome-%s' % self.docker.base_alias)
    run_cmd('docker rm selenium-test-chrome-%s' % self.docker.base_alias)
    run_cmd('docker stop selenium-test-ff-%s' % self.docker.base_alias)
    run_cmd('docker rm selenium-test-ff-%s' % self.docker.base_alias)

Tests.docker_codecept = docker_codecept
Tests.tests_run = tests_run
