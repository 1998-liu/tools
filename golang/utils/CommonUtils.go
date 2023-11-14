package utils

import (
	"fmt"
	"os"
)

/**
 * 判断文件是否存在
 */
 func pathExists(path string) {
	_, err := os.Stat(path)
	if err != nil {
		if os.IsNotExist(err) {
			panic(fmt.Errorf("file not exist"))
		} else {
			panic(fmt.Errorf("file error: %s", err))
		}
	}
}