#!/usr/bin/env bash
#
# push-all.sh — Push branch saat ini ke semua remote (origin & bitbucket).
# Default branch: develop
#
# Usage:
#   ./push-all.sh          → push branch develop ke origin & bitbucket
#   ./push-all.sh main     → push branch main ke origin & bitbucket
#

set -euo pipefail

BRANCH="${1:-develop}"
REMOTES=("origin" "bitbucket")

for remote in "${REMOTES[@]}"; do
    echo "→ Pushing '$BRANCH' to $remote ..."
    git push "$remote" "$BRANCH"
done

echo "✅ Done — '$BRANCH' pushed to all remotes."
