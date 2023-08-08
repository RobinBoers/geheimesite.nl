{ pkgs ? import <nixpkgs> {} }:

with pkgs;

let
  inherit (lib) optional optionals;

  # Look at search.nixos.org for the newest packages
  nodejs = nodejs_20;
in

mkShell {
  buildInputs = [ nodejs hugo ];
}
