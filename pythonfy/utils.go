package pythonfy

import "strings"

func indentLines(str string, i int, ident string) string {
	lines := strings.Split(str, "\n")
	for n := range lines {
		lines[n] = strings.Repeat(ident, i) + lines[n]
	}
	return strings.Join(lines, "\n")
}
