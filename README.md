###  TODO
* 集成到富文本编辑器 (交给前端)

* 前端能拿到 MathML, 需求如下:
    * MathML to LaTeX

    * MathML OR LaTex TO png 图片
        * MathML OR LaTex 直接排版出完整样式也行


### 公式录入编辑器 http://www.wiris.com/
* base64 转为图片保存 png
* 保存 latex 写法 (原始是 mathml)
* 如何封装


### WIRIS EDITOR提供以下服务
    * http://www.wiris.com/en/editor/docs/services

    生成具有以下格式的公式图像：PNG，SVG，PDF，EPS，SWF
    将MathML从/转换为LaTeX。
    生成公式的文本表示。可访问性。
    将表示MathML从/内容转换为MathML
    提供一个简单的公式计算器 适用于浮点数。
    不要与WIRIS CALC混淆。
    服务主要有两个接口：

    基于简单HTTP调用的Web服务接口。
    直接拨打图书馆。 可用作Java和.NET。


#### 手册 Tips
* http://www.wiris.com/en/editor/docs/manual/debug
    * MathML: 使用键组合 `CTRL + SHIFT + X` 访问它，因为它是 XML

    * LaTeX: 使用键组合 `CTRL + SHIFT + L` 访问它


* http://www.wiris.com/en/editor/docs/resources/embed-editor
    * 嵌入使用编辑器, 参考 *index.html*, 并使用 api 获取页面上的数据 (http://www.wiris.net/demo/editor/docs/api/).


#### Services Apis: http://www.wiris.com/en/editor/docs/servicesapis
* 渲染图片:
    * 参数:
        ```
        mml: Presentation MathML or Content MathML that represents the formula.
        latex: LaTeX code that represents the formula.
        format: format of the image. Allowed values are png, swf, svg, pdf and eps. If not specified, png is used.
        ```

    * Examples:
        * http://www.wiris.net/demo/editor/render?mml=%3Cmath%3E%3Cmn%3E2%3C/mn%3E%3Cmo%3E-%3C/mo%3E%3Cmi%3Ex%3C/mi%3E%3C/math%3E&backgroundColor=%23f00

        * http://www.wiris.net/demo/editor/render?format=svg&latex=2-x


* LaTeX to MathML:
    * 参数:
        ```
        latex: latex: LaTeX code that represents the formula.
        saveLatex: if defined, the LaTeX code is stored inside the result MathML as an annotation.
        grammar: the URL of the transformation grammar used to convert from LaTeX to MathML. If not specified, the default grammar is used.
        ```

    * Examples:
        * http://www.wiris.net/demo/editor/latex2mathml?latex=2-x

        * http://www.wiris.net/demo/editor/latex2mathml?latex=2-x&saveLatex


* MathML to LaTeX:
    * 参数:
        ```
        mml: Presentation MathML that represents the formula.
        saveMathML: if defined, the MathML is stored inside the result LaTeX code as a comment.
        grammar: the URL of the transformation grammar used to convert from MathML to LaTeX. If not specified, the default grammar is used.
        ```
    * Examples:
        * http://www.wiris.net/demo/editor/mathml2latex?mml=%3Cmath%3E%3Cmn%3E2%3C/mn%3E%3Cmo%3E-%3C/mo%3E%3Cmi%3Ex%3C/mi%3E%3C/math%3E

        * http://www.wiris.net/demo/editor/mathml2latex?mml=%3Cmath%3E%3Cmn%3E2%3C/mn%3E%3Cmo%3E-%3C/mo%3E%3Cmi%3Ex%3C/mi%3E%3C/math%3E&saveMathML


* Content MathML to Presentation MathML:
    * 略 ...

* Accessible text to MathML:
    * 略 ...

* MathML to accessible text:
    * 略 ...

* Evaluating formulas:
    * 略 ...

* Comparing formulas:
    * 略 ...
