command -v php >/dev/null 2>/dev/null || { echo "Cannot find php" >&2; exit 1; }

PORT=$1; shift;
[ -z "$PORT" ] && PORT=8000

DIR=`cd $(dirname $0); pwd`

cd $DIR/..

php -S localhost:$PORT bin/is_router.php
