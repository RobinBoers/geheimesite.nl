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

# In this file, all configured Lift secrets are available in the environment.
# Furthermore, the variable $NET may be used to attach docker container to the
# shared Lift network, allowing them to communicate: `docker run ... --net $NET`

# It is ESSENTIAL that the target name EXACTLY matches the container name.

if target master-db; then
  docker run -dit --name master-db \
    --net $NET --restart always --log-driver none \
    -v /volume1/docker/postgres:/var/lib/postgresql/data:rw \
    -e "PG_DATA=/var/lib/postgresql/data" \
    -e "POSTGRES_USER=$DB_USER" \
    -e "POSTGRES_PASSWORD=$DB_PASS" \
    postgres:17
fi

if target tunnel; then
  docker run -dit --name tunnel --log-driver none \
    --net $NET --restart no \
    cloudflare/cloudflared:latest \
    tunnel --no-autoupdate run --token "$TUNNEL_TOKEN"
fi

if target miniflux; then
  docker run -dit --name miniflux --log-driver none \
    --net $NET --restart no \
    -e "LISTEN_ADDR=0.0.0.0:8080" \
    -e "BASE_URL=https://rss.dupunkto.org" \
    -e "DATABASE_URL=postgres://$DB_USER:$DB_PASS@master-db:5432/miniflux?sslmode=disable" \
    -e "RUN_MIGRATIONS=1" \
    -e "CREATE_ADMIN=1" \
    -e "ADMIN_USERNAME=axcelott" \
    -e "ADMIN_PASSWORD=$ADMIN_PASS" \
    -e "DISABLE_LOCAL_AUTH=true" \
    -e "AUTH_PROXY_HEADER=X-Nym-User" \
    -e "AUTH_PROXY_USER_CREATION=1" \
    -e "TRUSTED_REVERSE_PROXY_NETWORKS=172.18.0.0/16" \
    miniflux/miniflux:latest
fi

if target grobid; then
  docker run -dit --name grobid \
    --net $NET --restart always \
    --init --ulimit core=0 \
    grobid/grobid:0.9.1-crf
fi

# if target inv-companion; then
#   docker run -dit --name inv-companion \
#     --net $NET --restart no --log-driver none \
#     --cap-drop ALL \
#     --read-only \
#     --security-opt no-new-privileges:true \
#     -e "SERVER_SECRET_KEY=$INV_SECRET" \
#     quay.io/invidious/invidious-companion --tcp 0.0.0.0:8282
# fi
# 
# if target invidious; then
#   docker run -dit --name invidious \
#     --net $NET --restart no --log-driver none \
#     --link inv-companion \
#     -v /volume1/docker/invidious/config.yaml:/etc/invidious/config.yaml:ro \
#     -e "INVIDIOUS_CONFIG_FILE=/etc/invidious/config.yaml" \
#     quay.io/invidious/invidious
# fi

#if target nextcloud; then
#  docker run -dit --name nextcloud \
#    --net $NET --restart no \
#    -v /volume1/docker/nextcloud:/var/www/html:rw \
#    -e "PHP_MEMORY_LIMIT=512M" \
#    -e "PHP_UPLOAD_LIMIT=512M" \
#    -e "APACHE_BODY_LIMIT=1073741824" \
#    -e "POSTGRES_DB=nextcloud" \
#    -e "POSTGRES_USER=$DB_USER" \
#    -e "POSTGRES_PASSWORD=$DB_PASS" \
#    -e "POSTGRES_HOST=master-db:5432" \
#    -e "NEXTCLOUD_ADMIN_USER=axcelott" \
#    -e "NEXTCLOUD_ADMIN_PASSWORD=$ADMIN_PASS" \
#    nextcloud:latest
#fi

#if target fredericocraft; then
#  docker run -dit --name fredericocraft \
#    -p 25565:25565/tcp \
#    -v /volume1/docker/fredericocraft1:/data:rw \
#    -e 'TYPE=paper' \
#    -e 'VERSION=1.16.5' \
#    -e 'EULA=true' \
#    -e 'UID=1000' \
#    -e 'GID=1000' \
#    -e 'MEMORY=9G' \
#    -e 'USE_AIKAR_FLAGS=true' \
#    -e 'TZ=Europe/Amsterdam' \
#    -e 'DIFFICULTY=2' \
#    -e 'FORCE_GAMEMODE=true' \
#    -e 'SEED=anotherseason' \
#    -e 'LEVEL=notworld' \
#    -e 'SPAWN_PROTECTION=0' \
#    -e 'ENABLE_WHITELIST=true' \
#    -e 'WHITELIST=Axcelott' \
#    -e 'OPS=Axcelott' \
#    -e 'VANILLATWEAKS_SHARECODE=6ihD0e' \
#    itzg/minecraft-server:java11
#fi

#if target dojocraft; then
#  docker run -dit --name dojocraft \
#    -p 25565:25565/tcp \
#    -v /volume1/docker/coderdojo1:/data:rw \
#    -e 'VERSION=26.2' \
#    -e 'EULA=true' \
#    -e 'UID=1000' \
#    -e 'GID=1000' \
#    -e 'MEMORY=9G' \
#    -e 'USE_AIKAR_FLAGS=true' \
#    -e 'TZ=Europe/Amsterdam' \
#    -e 'DIFFICULTY=peaceful' \
#    -e 'FORCE_GAMEMODE=true' \
#    -e 'SEED=coderdojo' \
#    -e 'LEVEL=world' \
#    -e 'SPAWN_PROTECTION=0' \
#    -e 'ENABLE_WHITELIST=false' \
#    -e 'VANILLATWEAKS_SHARECODE=6ihD0e' \
#    -e "CUSTOM_SERVER_PROPERTIES=online-mode=false" \
#     itzg/minecraft-server
#fi

#if target techcocraft; then
#  docker run -dit --name techcocraft \
#    -p 25565:25565/tcp \
#    -v /volume1/docker/techco0:/data:rw \
#    -e 'VERSION=26.2' \
#    -e 'EULA=true' \
#    -e 'UID=1000' \
#    -e 'GID=1000' \
#    -e 'MEMORY=9G' \
#    -e 'USE_AIKAR_FLAGS=true' \
#    -e 'TZ=Europe/Amsterdam' \
#    -e 'DIFFICULTY=2' \
#    -e 'FORCE_GAMEMODE=true' \
#    -e 'SEED=technischecommissie' \
#    -e 'LEVEL=world' \
#    -e 'SPAWN_PROTECTION=0' \
#    -e 'ENABLE_WHITELIST=false' \
#    -e 'VANILLATWEAKS_SHARECODE=6ihD0e' \
#     itzg/minecraft-server
#fi

#if target gem; then
#  docker run -dit --name gem \
#    --net $NET -p 1965:1965 \
#    -v /volume1/gemini/config.toml:/config/config.toml \
#    -v /volume1/gemini/certs:/config \
#    -v /volume1/gemini:/var/gemini \
#    ghcr.io/tdemin/docker-satellite
#fi

#if target goph; then
#  docker run -dit --name goph \
#    --net $NET -p 70:70 \
#    --hostname dupunkto.org \
#    -v /volume1/gopher:/var/gopher:rw \
#    -e "DISABLE_USERDIRS=1" \
#    -e "DISABLE_EXECUTABLES=1" \
#    -e "DISABLE_FOOTER=1" \
#    joshkaiju/gophernicus
#fi

if target uptime; then
  docker run -dit --name uptime \
    --net $NET --restart no --log-driver none \
    -v /volume1/docker/uptime:/app/data \
    louislam/uptime-kuma:2
fi


if target gitz; then
  docker run -dit --name gitz \
    --net $NET --restart always --log-driver none \
    -v /volume1/www/git.dupunkto.org:/var/www/html:rw \
    -v /volume1/git:/var/git:rw \
    -e "SCAN_PATH=/var/git" \
    -e "NAMESPACES=axcelott,ggijs,dupunkto,sites,meta,neopub,grape-lang,nindo,skylight,unlibrary,legacy,forks" \
    -e "SHARED_NAMESPACES=axcelott,ggijs" \
    -e "LEGACY_NAMESPACES=neopub,grape-lang,nindo,skylight,unlibrary,legacy" \
    -e "HIDDEN_NAMESPACES=meta" \
    ghcr.io/dupunkto/php

  # Make sure the container is allowed to read git repos.
  docker exec gitz git config --system --add safe.directory '*'
fi

if target bugz; then
  docker run -dit --name bugz \
    --net $NET --restart always \
    -v /volume1/www/bugs.dupunkto.org:/var/www/html:rw \
    -v /volume1/docker/bugz:/var/www/data:rw \
    -e "DATABASE_URL=sqlite:///var/www/data/data.db" \
    -e "SECRET=$BUGZ_SECRET" \
    ghcr.io/dupunkto/php
fi

if target rplace; then
  docker run -dit --name rplace \
    --net $NET --restart always --log-driver none \
    -v /volume1/www/geheimesite.nl:/var/www/html:rw \
    ghcr.io/dupunkto/php
fi

if target atlas; then
  docker run -dit --name atlas \
	  --net $NET --restart always --log-driver none \
	  -v /volume1/www/pubb.dupunkto.org:/var/www/html:rw \
	  -v /volume1/docker/atlas/.htaccess:/var/www/html/.htaccess:rw \
	  -v /volume1/docker/atlas:/var/www/html/data \
	  ghcr.io/dupunkto/php
fi

if target nym; then
  docker run -dit --name nym \
	  --net $NET --restart always \
	  -e "ISSUER=https://nym.dupunkto.org" \
	  -e "HMAC_SIGNING_KEY=$NYM_SECRET" \
    -e "RSA_SIGNING_KEY=/var/www/data/private.pem" \
    -e "USERS=/var/www/data/users.json" \
    -e "CLIENTS=/var/www/data/clients.json" \
    -e "STATE=/var/www/data/state.json" \
	  -e "PROXY_ENABLE=1" \
	  -e "PROXY_BYPASS=/v1/*,/accounts/ClientLogin,/reader/api/*" \
	  -e "ENFORCE_PKCE=0" \
	  -v /volume1/www/nym.dupunkto.org:/var/www/html:rw \
    -v /volume1/docker/nym:/var/www/data:rw \
	  ghcr.io/dupunkto/php
fi

if target hop; then
  docker run -dit --name hop \
	  --net $NET --restart no \
	  -e "SECRET_KEY_BASE=$KEY_BASE" \
	  -e "DATABASE_URL=postgresql://$DB_USER:$DB_PASS@master-db:5432/hop?sslmode=disable" \
	  -e "ADMIN_DOMAIN=hop.dupunkto.org" \
	  -e "REDIRECT_DOMAIN=dupunk.to" \
    -e "AUTH_PROVIDER=nym" \
    -e "AUTH_ENDPOINT=https://nym.dupunkto.org" \
	  reg.dupunkto.org/dupunkto/hop
fi

if target scry; then
  docker run -dit --name scry \
    --net $NET --restart no --log-driver none \
    -v /volume1/git/scry:/repo:rw \
    -e "MIX_ENV=prod" \
    -e "PHX_HOST=scry.dupunkto.org" \
    -e "ROOT=/repo" \
    -e "TOKEN=$SCRY_TOKEN" \
    -e "AUTH_PROVIDER=nym" \
    -e "AUTH_ENDPOINT=https://nym.dupunkto.org" \
    -e "SECRET_KEY_BASE=$KEY_BASE" \
    reg.dupunkto.org/dupunkto/scry
fi

if target cipher; then
  docker run -dit --name cipher \
    --net $NET --restart no --log-driver none \
    -e "MIX_ENV=prod" \
    -e "PHX_HOST=cipher.dupunkto.org" \
    -e "DATABASE_URL=postgres://$DB_USER:$DB_PASS@master-db/cipher" \
    -e "SECRET_KEY_BASE=$KEY_BASE" \
  	--env-file /volume1/docker/.env \
    reg.dupunkto.org/dupunkto/cipher:latest
fi

if target mesh; then
  docker run -dit --name mesh \
    --net $NET --restart no --log-driver none \
    -e "MIX_ENV=prod" \
    -e "PHX_HOST=nov.mesh.dupunkto.org" \
    -e "SECRET_KEY_BASE=$KEY_BASE" \
    -e "RELAY_SECRET=$MESH_SECRET" \
    -e "WEBHOOK_URL=$DISCORD_MESH_WEBHOOK" \
    -e "NODE=nov.mesh.dupunkto.org" \
    -e "PEERS=dec.mesh.dupunkto.org,feb.mesh.dupunkto.org,jun.mesh.dupunkto.org" \
    reg.dupunkto.org/dupunkto/mesh:latest
fi

if target vik; then
  docker run -dit --name vik \
    --net $NET --restart no --log-driver none \
    --shm-size=2gb \
    -v /volume1/docker/vik:/kv \
    -e "MIX_ENV=prod" \
    -e "PHX_HOST=vik.dupunkto.org" \
    -e "DATABASE_URL=postgres://$DB_USER:$DB_PASS@master-db/vik" \
    -e "SECRET_KEY_BASE=$KEY_BASE" \
    -e "LOGGER_WEBHOOK=$DISCORD_VIK_WEBHOOK" \
    -e "SCRY_ENDPOINT=http://scry:4000" \
    -e "SCRY_URL=https://scry.dupunkto.org" \
    -e "SCRY_TOKEN=$SCRY_TOKEN" \
    -e "KV_ROOT=/kv" \
    -e "AUTH_PROVIDER=nym" \
    -e "AUTH_ENDPOINT=https://nym.dupunkto.org" \
  	--env-file /volume1/docker/.env \
    ghcr.io/robinboers/vik:latest
fi

if target fog; then
  docker run -dit --name fog \
    --net $NET --restart no --log-driver none \
    --shm-size=2gb \
    -v /volume1/docker/fog:/kv \
    -e "MIX_ENV=prod" \
    -e "PHX_HOST=fog.geheimesite.nl" \
    -e "DATABASE_URL=postgres://$DB_USER:$DB_PASS@master-db/fog" \
    -e "SECRET_KEY_BASE=$KEY_BASE" \
    -e "LOGGER_WEBHOOK=$DISCORD_FOG_WEBHOOK" \
    -e "KV_ROOT=/kv" \
    -e "AUTH_PASSWORD=$ADMIN_PASS" \
  	--env-file /volume1/docker/.env \
    ghcr.io/robinboers/vik:latest
fi

if target router; then
  # The following IP (192.168.1.13) and MAC address (02:42:c0:a8:01:0f)
  # are reserved in NETGEAR's DHCP tables. The Docker gateway (172.18.0.1)
  # is hard-coded because host-gateway might route to the router rather
  # than the Docker network.

  docker create --name router \
    --restart no --log-driver none \
    --net ingress \
    --ip 192.168.1.13 \
    --mac-address 02:42:c0:a8:01:0f \
    --add-host=host.docker.internal:172.18.0.1 \
    -e GOMAXPROCS=4 \
    -v /volume1/docker/caddy/data:/data \
    -v /volume1/docker/caddy/config:/config \
    -v /volume1/docker/uptime.txt:/var/log/uptime \
    -v /volume1/www/access.log:/var/log/access.log \
    -v /volume1/www/Caddyfile:/etc/caddy/Caddyfile:ro \
    -v /volume1/www:/var/www/html:ro \
    --env-file /volume1/docker/.env \
    caddy:latest

  # We manually start the network, rather than using `docker run` directly,
  # because we cannot connect a running container to a second Docker network.

  docker network connect $NET router
  docker start router
fi
