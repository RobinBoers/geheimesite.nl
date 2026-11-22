#!/usr/bin/env bash

if [[ "${BASH_SOURCE[0]}" != "${0}" ]]; then
  # Script is being sourced, do nothing.
  :
else
  echo "Warning: This script provides bootstrap definitions for lift, and is not"
  echo "intended to be executed directly. Instead, use lift provision."
  echo
  exit 1
fi

# This file is used to provision docker containers. The `target` command
# indicates whether the given docker container is scheduled for provisioning:

# if target your-container; then
#   docker run -dit --name master-db \
#     --net $NET --restart always \
#     -v /volume1/docker/postgres:/var/lib/postgresql/data:rw \
#     -e "PG_DATA=/var/lib/postgresql/data" \
#     -e "POSTGRES_USER=$DB_USER" \
#     -e "POSTGRES_PASSWORD=$DB_PASS" \
#     postgres:17
# fi

# It is ESSENTIAL that the target name EXACTLY matches the container name.

if target actual; then
  docker run -dit --name actual --log-driver none \
    --net $NET --restart no \
    -v /srv/data/actual:/data:rw \
    -e "ACTUAL_OPENID_DISCOVERY_URL=https://nym.dupunkto.org/.well-known/openid-configuration" \
    -e "ACTUAL_OPENID_CLIENT_ID=novid" \
    -e "ACTUAL_OPENID_CLIENT_SECRET=$NOVID_SECRET" \
    -e "ACTUAL_OPENID_SERVER_HOSTNAME=https://budget.home.ilysm.fr" \
    -e "ACTUAL_OPENID_ENFORCE=true" \
    actualbudget/actual-server:latest
fi

