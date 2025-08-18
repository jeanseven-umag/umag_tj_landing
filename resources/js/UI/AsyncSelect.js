import { AsyncPaginate } from "react-select-async-paginate";

export const AsyncSelect = ({
  w,
  mah,
  error,
  withAsterisk,
  search,
  label,
  colored,
  cacheUniqs,
  ...props
}) => {
  const customStyles = {
    menuList: (base) => ({
      ...base,
      maxHeight: "120px",
    }),
    loadingIndicator: (base) => ({
      ...base,
      display: !search ? "none" : "block",
    }),
    dropdownIndicator: (base) => ({
      ...base,
      display: "none",
    }),
    placeholder: (base) => ({
      ...base,
      fontSize: "16px",
      lineHeight: "19.5px",
      fontWeight: "400",
    }),
    control: (base) => ({
      ...base,
      fontSize: "16px",
      lineHeight: "19.5px",
      fontWeight: "400",
      color: "red",
    }),
    indicatorSeparator: (base) => ({
      ...base,
      display: "none",
    }),
    loadingDot: (base) => ({
      ...base,
    }),
    menu: (base) => ({
      ...base,
      display: !search ? "none" : "block",
      zIndex: 9998,
    }),
  };

  return (
    <AsyncPaginate
      {...props}
      noOptionsMessage={() => "Не найдено"}
      cacheUniqs={[search, ...(cacheUniqs ?? [])]}
      debounceTimeout={1000}
      styles={customStyles}
    />
  );
};
