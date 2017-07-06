#!/bin/bash

cd $WORKSPACE

docker-console test

NOW=$(date +"%m-%d-%Y_%H-%M-%S")
BACKUP_DIR="tests/tests/_reports"
BACKUP_DIR_TIME="$BACKUP_DIR/report-$NOW"
REPORTS_DIR="tests/tests/_output"

echo "Backing up report data to ./$BACKUP_DIR directory, please wait..."

if [ "$(ls -A $REPORTS_DIR)" ]; then
  if [ ! -d "$BACKUP_DIR" ]; then
    mkdir "$BACKUP_DIR"
  fi

  mkdir "$BACKUP_DIR_TIME"
  cp "$REPORTS_DIR"/* "$BACKUP_DIR_TIME"
  echo "You can find report here: ./$BACKUP_DIR_TIME"

  NEW_JOB_NAME=${JOB_NAME//_/-}
  HOST="$NEW_JOB_NAME.docker.stage-v4.droptica.org"

  echo "You can views reports here: $HOST/$BACKUP_DIR_TIME/report.html"
else
  echo "Reports directory ($REPORTS_DIR) is empty"
fi
