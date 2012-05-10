﻿<!-- Tables
================================================== -->
<section id="tables">
  <h2>表格标签</h2>
  <div class="row">
    <div class="span16">
      <table class="table table-bordered table-striped">
        <colgroup>
          <col class="span2">
          <col class="span14">
        </colgroup>
        <thead>
          <tr>
            <th>标签</th>
            <th>描述</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <code>&lt;table&gt;</code>
            </td>
            <td>
              包含格式化成表格的数据
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;thead&gt;</code>
            </td>
            <td>
							包含表头行(<code>&lt;tr&gt;</code>)，标示列
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;tbody&gt;</code>
            </td>
            <td>
              包含表的内容行(<code>&lt;tr&gt;</code>)
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;tr&gt;</code>
            </td>
            <td>
							表格的列，包含一个个单元格 (<code>&lt;td&gt;</code> 或者<code>&lt;th&gt;</code>)形成一行数据
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;td&gt;</code>
            </td>
            <td>
              表格的单元格
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;th&gt;</code>
            </td>
            <td>
							用于表头，标识列。必须用于<code>&lt;thead&gt;</code>中
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;标题&gt;</code>
            </td>
            <td>
							描述和总结表，对于屏幕阅读设备（screen readers） 特别有用
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="span8">
<pre class="prettyprint linenums">
&lt;table&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;…&lt;/th&gt;
      &lt;th&gt;…&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;…&lt;/td&gt;
      &lt;td&gt;…&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
</pre>
    </div>
  </div>

  <h2>表格类型</h2>
  <table class="table table-bordered table-striped">
  <thead>
      <tr>
        <th>名称</th>
        <th>样式</th>
        <th>描述</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>默认表格</td>
        <td class="muted">无</td>
        <td>没有任何其他样式，仅是行和列</td>
      </tr>
      <tr>
        <td>基本表格</td>
        <td>
          <code>.table</code>
        </td>
        <td>行间只有水平的线</td>
      </tr>
      <tr>
        <td>有边框的表格</td>
        <td>
          <code>.table-bordered</code>
        </td>
        <td>添加圆角和外边框</td>
      </tr>
      <tr>
        <td>奇偶相间的表格</td>
        <td>
          <code>.table-striped</code>
        </td>
        <td>行间添加奇偶背景色 (1, 3, 5, etc)</td>
      </tr>
      <tr>
        <td>压缩的表格</td>
        <td>
          <code>.table-condensed</code>
        </td>
        <td>将<code>td</code> 和 <code>th</code>元素的纵向间距（padding）减半从 8px 到 4px</td>
      </tr>
    </tbody>
  </table>


  <h2>表格示例</h2>

  <h3>1. 默认的表格样式</h3>
  <div class="row">
    <div class="span8">
      <p>表格默认的样式仅有一些边框来保证表格的可读性和结构性，DPL中code>.table</code>样式是必须的。</p>
<pre class="prettyprint linenums">
&lt;table class="table"&gt;
  …
&lt;/table&gt;</pre>
    </div>
    <div class="span16">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <h3>2.奇偶相间的表格</h3>
  <div class="row">
    <div class="span8">
      <p>为了实现更好的视觉效果可以在表行上添加奇偶线&mdash;仅仅添加 <code>.table-striped</code>样式.</p>
      <p class="muted"><strong>警告:</strong> 奇偶相间的背景使用<code>:nth-child</code> CSS 选择器 ，在IE7-IE8不支持此特性。</p>
<pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-striped"&gt;
  …
&lt;/table&gt;</pre>
    </div>
    <div class="span16">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <h3>3. 有边框的表格</h3>
  <div class="row">
    <div class="span8">
      <p>给整个表格添加边框，同时添加圆角美化表格的内容。</p>
<pre class="prettyprint linenums">
&lt;table class="table table-bordered"&gt;
  …
&lt;/table&gt;</pre>
    </div>
    <div class="span16">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="2">1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>@TwBootstrap</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <h3>4. 压缩的表格</h3>
  <div class="row">
    <div class="span8">
      <p>使你的表格更紧凑可以使用 <code>.table-condensed</code>样式，减半单元格的边距（padding），从8px 到 4px。</p>
<pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-condensed"&gt;
  …
&lt;/table&gt;</pre>
    </div>
    <div class="span16">
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>



  <h3>5.组合使用上面的样式</h3>
  <div class="row">
    <div class="span8">
      <p>F利用上面的样式，进行组合灵活的实现自己表格的样式。</p>
<pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-striped table-bordered table-condensed"&gt;
  ...
&lt;/table&gt;</pre>
    </div>
    <div class="span16">
      <table class="table table-striped table-bordered table-condensed">
        <thead>
          <tr>
            <th></th>
            <th colspan="2">Full name</th>
            <th></th>
          </tr>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
