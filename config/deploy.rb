set :application, "palyvoice-wp"
set :repository, "git@github.com:you/your-project.git"
set :scm, :git
set :deploy_to, "/home/path/to/project/"

set :deploy_via, :remote_cache
set :copy_exclude, [".git", ".DS_Store", ".gitignore", ".gitmodules", "local-config.php"]

server "wp.palyvoice.com", :app