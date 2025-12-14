import Config

config :vygotsky, language: "en"
config :vygotsky, repo: "https://github.com/RobinBoers/geheimesite.nl"

config :vygotsky, :blog,
  title: "Robin's Blog",
  description: "Thoughts and opinions of a teenager from the Netherlands.",
  rights: "Made with <3 in the Netherlands. Copying is an act of love. Please copy."

config :vygotsky, :author,
  name: "Robin Boers",
  email: "webmaster@roblog.nl"

config :vygotsky, shortcodes: %{
  "(TM)" => "™",
  "(c)" => "©",
  ":back:" => "←",
  ":go:" => "→",
  ":times:" => "×",
  ":dot:" => "·",
  ":love:" => "♡",
  ":fire:" => "🔥",
  ":sparkles:" => "✨",
  ":launch:" => "🚀",
  ":email:" => "✉️",
  ":video:" => "📺",
  ":audio:" => "🎙️",
  ":shrug:" => "¯\\_(ツ)\\_/¯",
  ":dancing:" => "ᕕ( ᐛ )ᕗ",
  ":fight:" => "(ง'̀-'́)ง",
  ":flex:" => "ᕦ(•̀‿•́ )ᕤ",
  ":happy:" => "(✿◠‿◠)",
  ":cute:" => "٩(｡•́‿•̀｡)۶"
}
