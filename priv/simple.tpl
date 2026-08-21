<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Listing {{.Path}}</title>

    <style>
      @import url("https://cdn.dupunkto.org/punkt.css");

      table {
        padding: 4px 0 3px;
        color: light-dark(#414141, #dedede);
      }

      td,
      th,
      tr {
        padding: 0;
        border: none;
      }

      tr:hover {
        background-color: light-dark(#eaeaea, #2b2b33);
      }

      table caption {
        color: light-dark(black, white);
        text-align: left;
        font-weight: bold;
        font-size: 1.6em;
      }

      caption,
      td pre a {
        padding: 7px 7px 7px 9px;
      }

      .back-arrow {
        padding-right: 2px;
      }

      .location {
        opacity: 0.8;
        margin: 10px;
        margin-top: 20px;
        margin-bottom: 0;
        font-size: 18px;
      }

      .tsize {
        text-align: right;
        padding-right: 8px;
      }

      .filetype, .filename {
        font-family: monospace;
      }

      .filetype {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
      }

      .filename a {
        display: block;
        width: 100%;
      }
    </style>
  </head>
  <body>
    {{if .CanGoUp}}
      {{ $parent := .Path | trimSuffix "/" | dir }}
      <p class="location">
        <span class="back-arrow">&lsaquo;</span>
        <a href="..">
          <script>document.write(location.protocol)</script>//{{ $.Host }}{{ $parent }}{{ if ne $parent "/" }}/{{ end }}
        </a>
      </p>
    {{ end }}
    <table>
      <caption class="title">
        Listing
        {{.Path}}
      </caption>
      <tbody>
        {{range.Items}}
          {{if .IsDir}}
            <tr>
              <td class="ttype">
                <span class="filetype">[d]</span>
              </td>
              <td class="tfile">
                <span class="filename">
                  <a href="{{.URL}}">
                    <script>document.write(location.protocol)</script>//{{$.Host}}{{$.Path}}{{.Name}}
                  </a>
                </span>
              </td>
              <td class="tsize">
                <span class="filesize">&mdash;</span>
              </td>
            </tr>
          {{end}}
        {{end}}
        {{range.Items}}
          {{if not .IsDir}}
            <tr>
              <td class="ttype"><span class="filetype">[f]</span></td>
              <td class="tfile">
                <span class="filename">
                  <a href="{{.URL}}">
                    <script>document.write(location.protocol)</script>//{{$.Host}}{{$.Path}}/{{.Name}}
                  </a>
                </span>
              </td>
              <td class="tsize">
                <span class="filesize">{{.HumanSize}}</span>
              </td>
            </tr>
          {{end}}
        {{end}}
      </tbody>
    </table>
  </body>
</html>
