const { render, useState } = wp.element;

const WordPressButton = ({ children, primary, ...others }) => {
  return (
    <button className={`button ${primary ? 'button-primary' : ''}`} {...others}>
      {children}
    </button>
  );
};

const FlexContainer = ({ children, justifyContent, alignItems, gap }) => {
  return <div style={{ display: 'flex', justifyContent, alignItems, gap }}>{children}</div>;
};

const MyComponent = () => {
  const [count, setCount] = useState(0);

  return (
    <div>
      <h2>Hello, React World!</h2>
      <p>
        This is a simple React component rendered in a WordPress plugin. It is a counter that increments every time you
        click the button.
      </p>

      <FlexContainer gap={14} alignItems="center">
        <WordPressButton onClick={() => setCount(count + 1)}>Click me</WordPressButton>
        <span>{count}</span>
      </FlexContainer>
    </div>
  );
};

render(<MyComponent />, document.getElementById('react-test'));
